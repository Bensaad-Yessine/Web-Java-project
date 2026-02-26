"""
Quick test script to check if profile pictures have detectable faces
"""
import face_recognition
import os
import glob

KNOWN_FACES_FOLDER = r"C:\Users\MSI\Documents\my_project_dev\public\uploads\profile_pics"

print("="*60)
print("Testing Profile Pictures for Face Detection")
print("="*60)

if not os.path.exists(KNOWN_FACES_FOLDER):
    print(f"❌ Folder not found: {KNOWN_FACES_FOLDER}")
    exit(1)

image_files = glob.glob(os.path.join(KNOWN_FACES_FOLDER, "*.jpg")) + \
              glob.glob(os.path.join(KNOWN_FACES_FOLDER, "*.jpeg")) + \
              glob.glob(os.path.join(KNOWN_FACES_FOLDER, "*.png"))

if not image_files:
    print(f"❌ No image files found in {KNOWN_FACES_FOLDER}")
    exit(1)

print(f"\n✓ Found {len(image_files)} image file(s)\n")

for img_path in image_files:
    filename = os.path.basename(img_path)
    print(f"Testing: {filename}")
    print("-" * 40)
    
    try:
        # Load image
        image = face_recognition.load_image_file(img_path)
        h, w = image.shape[:2]
        print(f"  Image size: {w}x{h} pixels")
        
        # Try to detect faces with HOG model
        face_locations_hog = face_recognition.face_locations(image, model="hog")
        print(f"  HOG model: {len(face_locations_hog)} face(s) detected")
        
        if face_locations_hog:
            # Get face encoding
            encodings = face_recognition.face_encodings(image, face_locations_hog)
            if encodings:
                print(f"  ✅ SUCCESS: Can generate face encoding")
            else:
                print(f"  ⚠️  WARNING: Face found but no encoding generated")
        else:
            print(f"  ❌ PROBLEM: No faces detected!")
            print(f"     This image won't work for face recognition")
            print(f"     Try a different photo with clearer face")
        
    except Exception as e:
        print(f"  ❌ ERROR: {str(e)}")
    
    print()

print("="*60)
print("Test Complete!")
print("="*60)
