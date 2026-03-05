import face_recognition
import cv2
import os
import numpy as np
import pickle
import time
from concurrent.futures import ThreadPoolExecutor
from flask import Flask, request, jsonify
import base64
import traceback
import mysql.connector
from mysql.connector import Error

app = Flask(__name__)

# Configuration
KNOWN_FACES_FOLDER = r"C:\Users\MSI\Documents\my_project_dev\public\uploads\profile_pics"

ENCODINGS_CACHE_FILE = "face_encodings_cache.pkl"
TOLERANCE = 0.6
FRAME_SCALE = 0.75  # Increased from 0.5 for better detection
MODEL = "hog"
MAX_IMAGE_DIMENSION = 800  # Increased from 600
THREAD_POOL_SIZE = min(os.cpu_count() or 1, 8)

# Database configuration
DB_CONFIG = {
    'host': '127.0.0.1',
    'port': 3306,
    'user': 'root',
    'password': '',
    'database': 'pidev'
}

# Global variables
known_encodings = []
known_filenames = []


def load_known_faces():
    """Load and encode known faces with caching"""
    global known_encodings, known_filenames

    if os.path.exists(ENCODINGS_CACHE_FILE):
        try:
            with open(ENCODINGS_CACHE_FILE, 'rb') as f:
                known_encodings, known_filenames = pickle.load(f)
            print(f"Loaded {len(known_filenames)} faces from cache")
            return
        except Exception as e:
            print(f"Cache loading failed: {str(e)}")

    known_encodings = []
    known_filenames = []

    if not os.path.exists(KNOWN_FACES_FOLDER):
        print(f"Error: Folder not found - {KNOWN_FACES_FOLDER}")
        return

    def process_image_file(filename):
        if not filename.lower().endswith(('.png', '.jpg', '.jpeg')):
            return None

        path = os.path.join(KNOWN_FACES_FOLDER, filename)
        try:
            image = face_recognition.load_image_file(path)
            h, w = image.shape[:2]

            if max(h, w) > MAX_IMAGE_DIMENSION:
                scale = MAX_IMAGE_DIMENSION / max(h, w)
                image = cv2.resize(image, (0, 0), fx=scale, fy=scale)

            face_locations = face_recognition.face_locations(image, model=MODEL)
            if not face_locations:
                return None

            face_encoding = face_recognition.face_encodings(image, face_locations)[0]
            return (face_encoding, filename)

        except Exception as e:
            print(f"Error processing {filename}: {str(e)}")
            return None

    with ThreadPoolExecutor(max_workers=THREAD_POOL_SIZE) as executor:
        results = list(executor.map(process_image_file, os.listdir(KNOWN_FACES_FOLDER)))

    valid_results = [r for r in results if r is not None]
    if valid_results:
        known_encodings, known_filenames = zip(*valid_results)
        known_encodings = list(known_encodings)
        known_filenames = list(known_filenames)

    print(f"Loaded {len(known_filenames)} known faces")

    try:
        with open(ENCODINGS_CACHE_FILE, 'wb') as f:
            pickle.dump((known_encodings, known_filenames), f)
    except Exception as e:
        print(f"Failed to save cache: {str(e)}")


def verify_user_in_database(profile_pic_filename):
    """
    Verify if a user exists in the database with the given profile picture filename
    Returns user data if found, None otherwise
    """
    try:
        connection = mysql.connector.connect(**DB_CONFIG)
        
        if not connection.is_connected():
            print("Failed to connect to database")
            return None
        
        cursor = connection.cursor(dictionary=True)
        
        # Try to find user by profile picture filename (various formats)
        query = """
            SELECT id, email, nom, prenom, roles, is_verified, is_banned 
            FROM user 
            WHERE profile_pic = %s 
               OR profile_pic = %s 
               OR profile_pic = %s
            LIMIT 1
        """
        
        # Try different path formats that might be stored in the database
        basename = os.path.basename(profile_pic_filename)
        variations = [
            basename,
            f'uploads/profile_pics/{basename}',
            f'/uploads/profile_pics/{basename}'
        ]
        
        cursor.execute(query, variations)
        user = cursor.fetchone()
        
        cursor.close()
        connection.close()
        
        if user:
            print(f"User found in database: {user['email']}")
            return user
        else:
            print(f"No user found with profile picture: {profile_pic_filename}")
            return None
            
    except Error as e:
        print(f"Database error: {str(e)}")
        return None
    except Exception as e:
        print(f"Unexpected error in database verification: {str(e)}")
        traceback.print_exc()
        return None


def process_image(image_data):
    """Process image and return match with full filename"""
    try:
        start_time = time.time()
        print("\n" + "="*50)
        print("🔍 Processing new image...")

        # Decode base64 image
        if ',' in image_data:
            header, data = image_data.split(',', 1)
        else:
            data = image_data

        img_data = base64.b64decode(data)
        nparr = np.frombuffer(img_data, np.uint8)
        image = cv2.imdecode(nparr, cv2.IMREAD_COLOR)

        if image is None:
            print("❌ Failed to decode image")
            return {"error": "Failed to decode image"}, 400

        print(f"✓ Image decoded: {image.shape[1]}x{image.shape[0]} pixels")
        
        # Save debug image
        debug_path = "debug_capture.jpg"
        cv2.imwrite(debug_path, image)
        print(f"✓ Debug image saved to: {debug_path}")

        # Resize and convert to RGB
        small_frame = cv2.resize(image, (0, 0), fx=FRAME_SCALE, fy=FRAME_SCALE)
        rgb_small_frame = cv2.cvtColor(small_frame, cv2.COLOR_BGR2RGB)
        
        print(f"✓ Resized to: {rgb_small_frame.shape[1]}x{rgb_small_frame.shape[0]} pixels")

        # Find faces with more aggressive upsampling
        print("🔍 Searching for faces...")
        face_locations = face_recognition.face_locations(
            rgb_small_frame,
            number_of_times_to_upsample=2,  # Increased from 1
            model=MODEL
        )

        print(f"✓ Found {len(face_locations)} face(s)")
        
        if not face_locations:
            print("⚠️ No faces detected in image")
            # Try again without downscaling
            print("🔍 Trying full resolution...")
            face_locations = face_recognition.face_locations(
                cv2.cvtColor(image, cv2.COLOR_BGR2RGB),
                number_of_times_to_upsample=1,
                model=MODEL
            )
            print(f"✓ Full resolution: Found {len(face_locations)} face(s)")
            
            if not face_locations:
                return {"status": "unknown", "message": "No faces detected"}, 200

        # Get encodings
        face_encodings = face_recognition.face_encodings(
            rgb_small_frame,
            known_face_locations=face_locations,
            num_jitters=1
        )

        if not face_encodings:
            print("❌ No encodings generated")
            return {"status": "unknown", "message": "No encodings generated"}, 200

        print(f"✓ Generated {len(face_encodings)} face encoding(s)")

        # Fixed the array truth value check
        if len(known_encodings) == 0:
            print("⚠️ No known faces loaded!")
            return {"status": "unknown", "message": "No known faces loaded"}, 200

        print(f"✓ Comparing against {len(known_encodings)} known faces...")

        # Compare faces
        face_distances = face_recognition.face_distance(known_encodings, face_encodings[0])
        best_match_index = np.argmin(face_distances)
        best_distance = face_distances[best_match_index]

        print(f"✓ Best match distance: {best_distance:.4f} (threshold: {TOLERANCE})")
        processing_time = time.time() - start_time

        if best_distance < TOLERANCE:
            matched_filename = known_filenames[best_match_index]
            print(f"✅ MATCH FOUND: {matched_filename}")
            
            # Verify user exists in database
            user_data = verify_user_in_database(matched_filename)
            
            if user_data:
                # Check if user is banned
                if user_data.get('is_banned'):
                    return {
                        "status": "banned",
                        "message": "User account is banned",
                        "distance": float(best_distance),
                        "processing_time": processing_time
                    }, 403
                
                # Check if user is verified
                if not user_data.get('is_verified'):
                    return {
                        "status": "unverified",
                        "message": "User account is not verified",
                        "user_id": user_data['id'],
                        "email": user_data['email'],
                        "distance": float(best_distance),
                        "processing_time": processing_time
                    }, 403
                
                # User exists and is valid - return success with user data
                return {
                    "status": "success",
                    "user_id": user_data['id'],
"email": user_data['email'],
                    "full_name": f"{user_data.get('prenom', '')} {user_data.get('nom', '')}".strip(),
                    "filename": matched_filename,
                    "roles": user_data.get('roles', []),
                    "distance": float(best_distance),
                    "processing_time": processing_time
                }, 200
            else:
                # Face matched but no user in database
                return {
                    "status": "no_user",
                    "message": "Face recognized but no user account found in database",
                    "filename": matched_filename,
                    "distance": float(best_distance),
                    "processing_time": processing_time
                }, 404
        else:
            print(f"❌ NO MATCH: Best distance {best_distance:.4f} > threshold {TOLERANCE}")
            print(f"   Closest match was: {known_filenames[best_match_index]}")
            return {
                "status": "unknown",
                "message": "No matching face found",
                "best_distance": float(best_distance),
                "processing_time": processing_time
            }, 200

    except Exception as e:
        print(f"❌ Processing error: {str(e)}")
        traceback.print_exc()
        return {
            "error": str(e),
            "traceback": traceback.format_exc()
        }, 500


@app.route('/recognize', methods=['POST'])
def recognize_face():
    if 'image' not in request.form:
        return jsonify({"error": "No image provided"}), 400

    result, status_code = process_image(request.form['image'])
    return jsonify(result), status_code


@app.route('/health', methods=['GET'])
def health_check():
    """Check if the service and database are available"""
    status = {
        "service": "running",
        "faces_loaded": len(known_filenames),
        "database": "disconnected"
    }
    
    try:
        connection = mysql.connector.connect(**DB_CONFIG)
        if connection.is_connected():
            status["database"] = "connected"
            connection.close()
    except Error as e:
        status["database_error"] = str(e)
    
    return jsonify(status), 200


# Load faces on startup
load_known_faces()

# Test database connection on startup
print("\nTesting database connection...")
try:
    connection = mysql.connector.connect(**DB_CONFIG)
    if connection.is_connected():
        db_info = connection.get_server_info()
        print(f"✓ Connected to MySQL Server version {db_info}")
        cursor = connection.cursor()
        cursor.execute("SELECT COUNT(*) FROM user WHERE profile_pic IS NOT NULL")
        count = cursor.fetchone()[0]
        print(f"✓ Found {count} users with profile pictures in database")
        cursor.close()
        connection.close()
    else:
        print("✗ Failed to connect to database")
except Error as e:
    print(f"✗ Database connection error: {str(e)}")
except Exception as e:
    print(f"✗ Unexpected error: {str(e)}")

if __name__ == "__main__":
    print("\n" + "="*50)
    print("Face Recognition API Starting...")
    print(f"Known faces folder: {KNOWN_FACES_FOLDER}")
    print(f"Database: {DB_CONFIG['database']} @ {DB_CONFIG['host']}:{DB_CONFIG['port']}")
    print(f"Loaded {len(known_filenames)} face encodings")
    print("="*50 + "\n")
    app.run(host='0.0.0.0', port=5000, threaded=True)
