# python_models/predict_logreg.py
import sys
import json
import pandas as pd
import joblib
import numpy as np
from datetime import datetime
import os

def load_model_and_preprocessor():
    """Load the trained pipeline and feature columns using absolute paths"""
    # Get the directory where this script is located
    script_dir = os.path.dirname(os.path.abspath(__file__))
    
    # Build absolute paths to model files
    pipeline_path = os.path.join(script_dir, 'prediction_model.joblib')
    
    # Check if files exist
    if not os.path.exists(pipeline_path):
        raise FileNotFoundError(f"Model file not found at: {pipeline_path}")
    
    pipeline = joblib.load(pipeline_path)
    # Hardcoded feature order matching model training
    feature_columns = [
        'completion_rate', 'abandonment_rate', 'average_start_delay_minutes',
        'average_completion_duration_minutes', 'pause_frequency', 'most_productive_hour', 'most_productive_day_of_week',
        'completion_rate_by_type_MANUEL', 'completion_rate_by_type_REUNION', 'completion_rate_by_type_REVISION', 'completion_rate_by_type_SANTE', 'completion_rate_by_type_EMPLOI',
        'abandonment_rate_by_type_MANUEL', 'abandonment_rate_by_type_REUNION', 'abandonment_rate_by_type_REVISION', 'abandonment_rate_by_type_SANTE', 'abandonment_rate_by_type_EMPLOI',
        'average_start_delay_by_type_MANUEL', 'average_start_delay_by_type_REUNION', 'average_start_delay_by_type_REVISION', 'average_start_delay_by_type_SANTE', 'average_start_delay_by_type_EMPLOI',
        'task_duration_minutes', 'start_hour', 'start_dayofweek', 'deadline_gap_minutes',
        'type_MANUEL', 'type_REUNION', 'type_REVISION', 'type_SANTE',
        'priorite_FAIBLE', 'priorite_MOYEN'
    ]
    
    return pipeline, feature_columns

def prepare_features(raw_data, feature_columns):
    """Recreate the exact preprocessing from your training code"""
    
    task_data = raw_data['task']
    profile_data = raw_data['profile']
    
    features = {}
    
    # Convert dates
    date_debut = pd.to_datetime(task_data['date_debut']) if task_data['date_debut'] else None
    date_fin = pd.to_datetime(task_data['date_fin']) if task_data['date_fin'] else None
    date_echeance = pd.to_datetime(task_data['date_echeance']) if task_data['date_echeance'] else None
    
    # Task duration
    if date_debut and date_fin:
        features['task_duration_minutes'] = (date_fin - date_debut).total_seconds() / 60
    else:
        features['task_duration_minutes'] = task_data.get('duree_estimee', 60)
    
    # Start hour
    features['start_hour'] = date_debut.hour if date_debut else 0
    
    # Day of week
    features['start_dayofweek'] = date_debut.dayofweek if date_debut else 0
    
    # Deadline gap
    if date_echeance and date_fin:
        features['deadline_gap_minutes'] = (date_echeance - date_fin).total_seconds() / 60
    else:
        features['deadline_gap_minutes'] = 0
    
    # One-hot encode type (with drop_first=True)
    types = ['MANUEL', 'REUNION', 'REVISION', 'SANTE', 'EMPLOI']
    task_type = task_data['type']
    for t in types:
        if t != 'EMPLOI':  # EMPLOI is dropped (first type)
            features[f'type_{t}'] = 1 if task_type == t else 0
    
    # One-hot encode priority (with drop_first=True)
    priorities = ['FAIBLE', 'MOYEN', 'ELEVEE']
    task_priority = task_data['priorite']
    for p in priorities:
        if p != 'ELEVEE':  # ELEVEE is dropped (first priority)
            features[f'priorite_{p}'] = 1 if task_priority == p else 0
    
    # User profile features
    if profile_data:
        # Handle null values
        features['completion_rate'] = profile_data.get('completion_rate', 0.0) or 0.0
        features['abandonment_rate'] = profile_data.get('abandonment_rate', 0.0) or 0.0
        features['average_start_delay_minutes'] = profile_data.get('average_start_delay_minutes', 0.0) or 0.0
        features['average_completion_duration_minutes'] = profile_data.get('average_completion_duration_minutes', 0.0) or 0.0
        features['pause_frequency'] = profile_data.get('pause_frequency', 0.0) or 0.0
        features['most_productive_hour'] = profile_data.get('most_productive_hour', 0) or 0
        features['most_productive_day_of_week'] = profile_data.get('most_productive_day_of_week', 0) or 0
        
        # JSON per-type features (all 5 types)
        completion_by_type = profile_data.get('completion_rate_by_type', {}) or {}
        abandonment_by_type = profile_data.get('abandonment_rate_by_type', {}) or {}
        delay_by_type = profile_data.get('average_start_delay_by_type', {}) or {}
        
        for t in types:
            features[f'completion_rate_by_type_{t}'] = completion_by_type.get(t, 0.0) or 0.0
        for t in types:
            features[f'abandonment_rate_by_type_{t}'] = abandonment_by_type.get(t, 0.0) or 0.0
        for t in types:
            features[f'average_start_delay_by_type_{t}'] = delay_by_type.get(t, 0.0) or 0.0
    else:
        # Fill with zeros if no profile
        scalar_features = [
            'completion_rate', 'abandonment_rate', 'average_start_delay_minutes',
            'average_completion_duration_minutes', 'pause_frequency', 
            'most_productive_hour', 'most_productive_day_of_week'
        ]
        for feat in scalar_features:
            features[feat] = 0.0
        
        for t in types:
            features[f'completion_rate_by_type_{t}'] = 0.0
        for t in types:
            features[f'abandonment_rate_by_type_{t}'] = 0.0
        for t in types:
            features[f'average_start_delay_by_type_{t}'] = 0.0
    
    # Convert to DataFrame
    df = pd.DataFrame([features])
    
    # Ensure all expected columns exist
    for col in feature_columns:
        if col not in df.columns:
            df[col] = 0
    
    # Reorder columns to match training data
    df = df[feature_columns]
    
    return df

def main():
    try:
        if len(sys.argv) < 2:
            print(json.dumps({"error": "No data provided"}))
            sys.exit(1)
        
        # Parse the JSON data
        raw_data = json.loads(sys.argv[1])
        
        # Load model and feature columns
        pipeline, feature_columns = load_model_and_preprocessor()
        
        # Prepare features
        X = prepare_features(raw_data, feature_columns)
        
        # Make prediction
        probability = pipeline.predict_proba(X)[0, 1]
        
        # Output just the probability
        print(probability)
        
    except FileNotFoundError as e:
        print(json.dumps({"error": f"Model file not found: {str(e)}"}))
        sys.exit(1)
    except Exception as e:
        print(json.dumps({"error": str(e)}))
        sys.exit(1)

if __name__ == "__main__":
    main()