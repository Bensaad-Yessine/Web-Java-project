import pandas as pd
import joblib
from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestClassifier
from sklearn.metrics import accuracy_score, roc_auc_score, classification_report

# 1) Lire dataset
df = pd.read_csv("abandon_dataset.csv")

# 2) Features (sans tâches)
X = df[[
    "nb_jours_total",
    "nb_suivis",
    "regularite",
    "score_moyen",
    "score_debut",
    "score_fin",
    "progression",
    "std_score"
]]

# Target
y = df["abandon"]

# 3) Split train/test
X_train, X_test, y_train, y_test = train_test_split(
    X, y, test_size=0.2, random_state=42, stratify=y
)

# 4) Modèle
model = RandomForestClassifier(
    n_estimators=400,
    random_state=42,
    class_weight="balanced"
)

# 5) Entraînement
model.fit(X_train, y_train)

# 6) Évaluation
pred = model.predict(X_test)
proba = model.predict_proba(X_test)[:, 1]

print("✅ Accuracy:", round(accuracy_score(y_test, pred), 4))
print("✅ ROC AUC :", round(roc_auc_score(y_test, proba), 4))
print(classification_report(y_test, pred))

# 7) Sauvegarde
joblib.dump(model, "abandon_model.pkl")
print("✅ Modèle sauvegardé: abandon_model.pkl")