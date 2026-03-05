import random
import pandas as pd

random.seed(42)

rows = []

for _ in range(1000):

    nb_jours_total = random.choice([14, 21, 30])
    nb_suivis = random.randint(0, nb_jours_total)

    regularite = nb_suivis / nb_jours_total

    score_debut = random.uniform(3, 8)

    trend = (regularite * 2) - random.uniform(0.5, 1.5)

    score_fin = max(0, min(10, score_debut + trend))

    progression = score_fin - score_debut

    score_moyen = (score_debut + score_fin) / 2

    std_score = abs(progression) * random.uniform(0.5, 1.5)

    abandon_probability = (1 - regularite) * 0.6 + (max(0, -progression) / 3) * 0.4

    abandon_probability = min(1, max(0, abandon_probability))

    abandon = 1 if random.random() < abandon_probability else 0

    rows.append({
        "nb_jours_total": nb_jours_total,
        "nb_suivis": nb_suivis,
        "regularite": round(regularite, 2),
        "score_moyen": round(score_moyen, 2),
        "score_debut": round(score_debut, 2),
        "score_fin": round(score_fin, 2),
        "progression": round(progression, 2),
        "std_score": round(std_score, 2),
        "abandon": abandon
    })

df = pd.DataFrame(rows)

df.to_csv("abandon_dataset.csv", index=False)

print("Dataset created successfully")
print(df.head())