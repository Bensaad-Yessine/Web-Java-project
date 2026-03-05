"""
Service d'ingénierie des caractéristiques pour la prédiction d'assiduité.
"""

import numpy as np
from typing import Dict, Any, List


def generate_explanations(features: Dict[str, Any]) -> List[str]:
    """
    Génère des explications lisibles basées sur les caractéristiques de la séance.
    
    Args:
        features: Dictionnaire des caractéristiques de la séance
        
    Returns:
        List[str]: Liste des explications
    """
    explanations = []
    
    # Heure de début
    heure = features.get('heure_debut', 12)
    if heure <= 9:
        explanations.append(f"Créneau {heure}h => présence plus faible (tôt le matin)")
    elif heure >= 17:
        explanations.append(f"Créneau {heure}h => présence plus faible (fin de journée)")
    else:
        explanations.append(f"Créneau {heure}h => bonne présence attendue")
    
    # Mode d'enseignement
    mode = features.get('mode', '').lower()
    if mode == 'en_ligne':
        explanations.append("Mode en ligne => baisse attendue de la présence")
    elif mode == 'hybride':
        explanations.append("Mode hybride => présence modérée attendue")
    else:
        explanations.append("Mode présentiel => bonne présence attendue")
    
    # Type de séance
    type_seance = features.get('type_seance', '').upper()
    if type_seance == 'TP':
        explanations.append("TP => présence plus élevée (pratique obligatoire)")
    elif type_seance == 'TD':
        explanations.append("TD => présence modérée (travaux dirigés)")
    else:
        explanations.append("COURS => présence variable selon le sujet")
    
    # Moyennes de présence du groupe
    moy_groupe = features.get('moy_presence_groupe_30j', 0.5)
    if moy_groupe >= 0.8:
        explanations.append(f"Moyenne groupe élevée ({moy_groupe:.2f}) => hausse attendue")
    elif moy_groupe <= 0.4:
        explanations.append(f"Moyenne groupe faible ({moy_groupe:.2f}) => baisse attendue")
    else:
        explanations.append(f"Moyenne groupe modérée ({moy_groupe:.2f}) => présence normale")
    
    # Moyennes de présence de la matière
    moy_matiere = features.get('presence_moyenne_matiere', 0.5)
    if moy_matiere >= 0.8:
        explanations.append(f"Matière populaire ({moy_matiere:.2f}) => hausse attendue")
    elif moy_matiere <= 0.4:
        explanations.append(f"Matière peu suivie ({moy_matiere:.2f}) => baisse attendue")
    
    # Taux d'absence du groupe
    taux_absence = features.get('taux_absence_groupe_30j', 0.5)
    if taux_absence >= 0.3:
        explanations.append(f"Taux absence élevé ({taux_absence:.2f}) => risque d'absences")
    elif taux_absence <= 0.1:
        explanations.append(f"Taux absence faible ({taux_absence:.2f}) => bonne assiduité")
    
    # Durée
    duree = features.get('duree_min', 120)
    if duree >= 180:
        explanations.append(f"Séance longue ({duree}min) => risque de départs anticipés")
    elif duree <= 60:
        explanations.append(f"Séance courte ({duree}min) => bonne présence")
    
    return explanations


def calculate_confidence(mae: float, predicted_value: float) -> float:
    """
    Calcule un score de confiance basé sur l'erreur absolue moyenne.
    
    Args:
        mae: Erreur absolue moyenne du modèle
        predicted_value: Valeur prédite
        
    Returns:
        float: Score de confiance entre 0 et 1
    """
    # Confiance inversement proportionnelle à l'erreur relative
    if mae <= 0:
        return 1.0
    
    relative_error = mae / max(predicted_value, 1)
    confidence = max(0.0, min(1.0, 1.0 - relative_error))
    
    return confidence


def validate_features(features: Dict[str, Any]) -> List[str]:
    """
    Valide les caractéristiques d'entrée et retourne les erreurs trouvées.
    
    Args:
        features: Dictionnaire des caractéristiques à valider
        
    Returns:
        List[str]: Liste des erreurs de validation
    """
    errors = []
    
    # Validation des bornes
    if 'jour_semaine' in features:
        if not (0 <= features['jour_semaine'] <= 6):
            errors.append("jour_semaine doit être entre 0 et 6")
    
    if 'heure_debut' in features:
        if not (8 <= features['heure_debut'] <= 18):
            errors.append("heure_debut doit être entre 8 et 18")
    
    if 'moy_presence_groupe_30j' in features:
        if not (0 <= features['moy_presence_groupe_30j'] <= 1):
            errors.append("moy_presence_groupe_30j doit être entre 0 et 1")
    
    if 'taux_absence_groupe_30j' in features:
        if not (0 <= features['taux_absence_groupe_30j'] <= 1):
            errors.append("taux_absence_groupe_30j doit être entre 0 et 1")
    
    if 'presence_moyenne_matiere' in features:
        if not (0 <= features['presence_moyenne_matiere'] <= 1):
            errors.append("presence_moyenne_matiere doit être entre 0 et 1")
    
    if 'presence_moyenne_creneau' in features:
        if not (0 <= features['presence_moyenne_creneau'] <= 1):
            errors.append("presence_moyenne_creneau doit être entre 0 et 1")
    
    # Types de séance valides
    if 'type_seance' in features:
        valid_types = ['TP', 'TD', 'COURS']
        if features['type_seance'].upper() not in valid_types:
            errors.append(f"type_seance doit être l'un de: {valid_types}")
    
    # Modes valides
    if 'mode' in features:
        valid_modes = ['presentiel', 'hybride', 'en_ligne']
        if features['mode'].lower() not in valid_modes:
            errors.append(f"mode doit être l'un de: {valid_modes}")
    
    return errors