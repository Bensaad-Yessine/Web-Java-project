# Guide d'Intégration Smart Room AI 🤖

## 🎯 Objectif

Intégrer le système de prédiction d'assiduité et de recommandation de salles dans l'application Student Assistant existante.

## 📋 Prérequis

1. **Python 3.10+** installé
2. **Git** (optionnel)
3. **Accès administrateur** à l'application Student Assistant

## 🚀 Installation Rapide

### 1. Démarrer l'API Smart Room AI

**Windows :**
```bash
cd smart_room_ai
start_api.bat
```

**Linux/Mac :**
```bash
cd smart_room_ai
chmod +x start_api.sh
./start_api.sh
```

** Manuel :**
```bash
cd smart_room_ai
pip install -r requirements.txt
python training/generate_dataset.py
python training/train_model.py
uvicorn app.main:app --reload
```

### 2. Vérifier l'installation

Ouvrez http://localhost:8000 dans votre navigateur. Vous devriez voir :
```json
{
  "message": "Smart Room AI API",
  "version": "1.0.0",
  "status": "running",
  "model_available": true
}
```

## 🔗 Intégration dans Student Assistant

### 1. Variables d'environnement

Le fichier `.env` est déjà configuré avec :
```env
SMARTROOM_API_BASE_URL=http://localhost:8000
SMARTROOM_ENABLED=true
```

### 2. Services ajoutés

✅ **SmartRoomAIService.php** - Communication avec l'API  
✅ **SalleRepository.php** - Méthodes `findAvailableRooms()`  
✅ **SeanceController.php** - Endpoints IA  

### 3. Templates créés

✅ **optimize.html.twig** - Page d'optimisation IA  
✅ **show.html.twig** - Bouton "Optimiser IA" ajouté  

## 🎮 Utilisation

### Scénario 1: Création de séance optimisée

1. Allez dans "Séances" → "Nouvelle séance"
2. Remplissez les informations de base
3. Cliquez sur "Optimiser IA" (nouveau bouton)
4. L'IA prédit le nombre d'étudiants et recommande la meilleure salle
5. Appliquez la recommandation

### Scénario 2: Optimisation d'une séance existante

1. Allez dans "Séances" → cliquez sur une séance
2. Cliquez sur le bouton "Optimiser IA"
3. L'analyse s'affiche avec :
   - 📊 Prédiction d'assiduité
   - 🎯 Salle recommandée
   - 📈 Taux d'occupation
   - 💡 Alternatives

### Scénario 3: Monitoring en temps réel

1. Pendant une séance, scannez les QR codes
2. Les données réelles sont collectées
3. Le modèle s'améliore avec le temps

## 📊 API Endpoints

### Prédiction d'assiduité
```http
POST /predict_attendance
Content-Type: application/json

{
  "jour_semaine": 1,
  "heure_debut": 14,
  "duree_min": 120,
  "type_seance": "TD",
  "mode": "presentiel",
  "matiere": "Maths",
  "groupe": "L1",
  "salle_capacite_initiale": 25,
  "moy_presence_groupe_30j": 0.8,
  "taux_absence_groupe_30j": 0.2,
  "presence_moyenne_matiere": 0.75,
  "presence_moyenne_creneau": 0.8
}
```

### Recommandation de salle
```http
POST /recommend_room
Content-Type: application/json

{
  "seance": { /* mêmes champs que ci-dessus */ },
  "available_rooms": [
    {"id": "B204", "bloc": "B", "etage": 2, "capacite": 25, "is_available": true}
  ],
  "margin_ratio": 0.10
}
```

## 🎯 Fonctionnalités Intelligentes

### 🧠 Prédiction d'assiduité
- **Algorithmes** : RandomForestRegressor + LinearRegression
- **MAE typique** : 2-4 étudiants
- **Confiance** : Calculée selon la précision du modèle
- **Facteurs** : Heure, type de séance, matière, historique

### 🏠 Recommandation de salles
- **Marge de sécurité** : 10% par défaut (configurable)
- **Optimisation** : Capacité la plus proche du besoin
- **Alternatives** : Top 3 des salles disponibles
- **Taux d'occupation** : Calculé automatiquement

### 📈 Amélioration continue
- **Collecte** : Données réelles via QR codes
- **Réentraînement** : Possible avec nouvelles données
- **Métriques** : MAE, RMSE, R² suivis

## 🔧 Configuration

### Personnaliser les prédictions

Modifiez `SmartRoomAIService.php` :
```php
private function getHistoricalPresence($entity, string $type): float
{
    switch ($type) {
        case 'groupe':
            // Adapter selon vos groupes
            if (str_contains($nom, 'l1')) return 0.85;
            // ...
    }
}
```

### Ajuster la marge de sécurité

Dans le contrôleur :
```php
$recommendation = $this->smartRoomAI->recommendRoom($seance, $rooms, 0.15); // 15%
```

## 🐛 Dépannage

### "Service IA indisponible"
```bash
# Vérifier si l'API tourne
curl http://localhost:8000/health

# Redémarrer l'API
cd smart_room_ai
./start_api.sh  # ou start_api.bat
```

### "Modèle non disponible"
```bash
# Réentraîner le modèle
cd smart_room_ai
python training/train_model.py
```

### Erreur de connexion
- Vérifiez que `SMARTROOM_API_BASE_URL` pointe vers la bonne URL
- Assurez-vous qu'aucun firewall ne bloque le port 8000

## 📈 Monitoring

### Métriques disponibles
- **Précision des prédictions** : Comparaison réel vs prédit
- **Utilisation des salles** : Taux d'occupation moyen
- **Performance du modèle** : MAE, R², confiance

### Tableau de bord
Accédez à http://localhost:8000/docs pour :
- Tester les endpoints
- Voir les schémas de données
- Monitorer la santé du service

## 🚀 Évolutions Possibles

1. **Mode Batch** : Optimisation hebdomadaire de toutes les séances
2. **Alertes** : Notifications lorsque l'IA détecte des anomalies
3. **Dashboard** : Interface analytics dédiée
4. **Export** : Rapports d'optimisation PDF/Excel
5. **Mobile** : App native pour les enseignants

## 📞 Support

- **Documentation** : `README.md` dans `smart_room_ai/`
- **API Docs** : http://localhost:8000/docs
- **Logs** : Console de l'API et logs Symfony

---

**🎉 Félicitations ! Votre application Student Assistant est maintenant intelligente !**