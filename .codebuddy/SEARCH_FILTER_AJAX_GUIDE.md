# Guide: Tri, Recherche et Filtrage par AJAX avec DQL

## Vue d'ensemble

J'ai implémenté un système complet de recherche, tri et filtrage par AJAX pour les entités `Classe` et `MatiereClasse` en utilisant des requêtes DQL optimisées.

## Fichiers modifiés

### 1. Repositories (avec DQL)

#### `src/Repository/ClasseRepository.php`
Nouvelles méthodes :
- `findWithFilters($search, $niveau, $filiere, $sort, $direction)` - Recherche, filtre et tri par DQL
- `getDistinctNiveaux()` - Retourne les niveaux distincts
- `getDistinctFilieres()` - Retourne les filières distinctes

**Exemple DQL :**
```php
$qb->andWhere(
    $qb->expr()->orX(
        $qb->expr()->like('LOWER(c.nom)', ':search'),
        $qb->expr()->like('LOWER(c.niveau)', ':search'),
        $qb->expr()->like('LOWER(c.description)', ':search'),
        $qb->expr()->like('LOWER(c.filiere)', ':search')
    )
)->setParameter('search', '%' . strtolower($search) . '%');
```

#### `src/Repository/MatiereClasseRepository.php`
Nouvelles méthodes :
- `findWithFilters($search, $classeId, $scoreMin, $scoreMax, $sort, $direction)` - Recherche, filtre par complexité
- `findByClasseWithSearch($classe, $search, $sort, $direction)` - Filtre les matières par classe
- `getScoreComplexiteRange()` - Retourne min et max de complexité

### 2. Contrôleurs (avec routes AJAX)

#### `src/Controller/ClasseController.php`
Nouvelles routes :
- `POST /classe/ajax/filter` - Route AJAX pour le filtrage en temps réel
- Amélioration de `index()` pour supporter les paramètres de recherche/filtre

**Exemple de réponse JSON :**
```json
{
  "success": true,
  "count": 5,
  "data": [
    {
      "id": 1,
      "nom": "GL1",
      "niveau": "1ère année",
      "filiere": "Génie Logiciel",
      "anneeuniversitaire": "2025/2026",
      "url": "/classe/1",
      "editUrl": "/classe/1/edit"
    }
  ]
}
```

#### `src/Controller/MatiereClasseController.php`
Nouvelles routes :
- `POST /matiere/classe/ajax/filter` - Filtrage des matières
- `GET /matiere/classe/classe/{id}/matieres/ajax` - Filtrage des matières par classe

### 3. Templates améliorés

#### `templates/classe/index.html.twig`
- **Panneau de filtres** avec:
  - Recherche par texte (temps réel, 300ms debounce)
  - Filtre par niveau
  - Filtre par filière
  - Sélection du tri (6 options)
- **Tableau dynamique** qui se met à jour sans rechargement
- **Compteur de résultats** en temps réel

#### `templates/matiere_classe/index.html.twig`
- **Panneau de filtres** avec:
  - Recherche par nom/description (temps réel)
  - Filtre par complexité (range slider)
  - 8 options de tri
- **Tableau dynamique** mis à jour par AJAX
- **Intégration du compteur de résultats**

## Fonctionnalités

### 1. Recherche en temps réel
```javascript
let searchTimeout;
searchInput.addEventListener('keyup', function() {
  clearTimeout(searchTimeout);
  searchTimeout = setTimeout(applyFilters, 300); // Debounce 300ms
});
```

### 2. Filtrage multi-critères
```javascript
const params = new URLSearchParams();
if (search) params.append('search', search);
if (niveau) params.append('niveau', niveau);
if (filiere) params.append('filiere', filiere);
```

### 3. Appel AJAX avec fetch
```javascript
fetch('{{ path("app_classe_ajax_filter") }}?' + params.toString())
  .then(response => response.json())
  .then(data => updateTable(data.data));
```

### 4. Mise à jour dynamique du tableau
```javascript
function updateTable(data) {
  const tbody = matieresTable.querySelector('tbody');
  tbody.innerHTML = ''; // Vider
  
  data.forEach(item => {
    const row = document.createElement('tr');
    row.innerHTML = `<td>...</td>`;
    tbody.appendChild(row);
  });
}
```

## Sécurité DQL

### Prévention de l'injection SQL
```php
// Utilisation de paramètres nommés
->setParameter('search', '%' . strtolower($search) . '%')

// Validation de la colonne de tri
$allowedSorts = ['id', 'nom', 'niveau', 'filiere'];
if (!in_array($sort, $allowedSorts, true)) {
    $sort = 'id';
}
```

### Validation de la direction
```php
$direction = strtoupper($direction) === 'DESC' ? 'DESC' : 'ASC';
```

## Paramètres de requête

### Classe
```
GET /classe/ajax/filter?search=GL&niveau=1%C3%A8re%20ann%C3%A9e&filiere=GL&sort=nom&direction=asc
```

### MatiereClasse
```
GET /matiere/classe/ajax/filter?search=Math&scoreMin=5&scoreMax=10&sort=coefficient&direction=desc
```

## Performance

### Optimisations DQL
- ✅ **LOWER()** pour recherche case-insensitive
- ✅ **DISTINCT** pour éviter les doublons
- ✅ **Paramètres liés** pour éviter l'injection
- ✅ **QueryBuilder** pour les requêtes flexibles

### Optimisations Frontend
- ✅ **Debounce** sur la recherche (300ms)
- ✅ **Fetch API** au lieu de jQuery
- ✅ **Range slider** pour complexité
- ✅ **Mise à jour selective du DOM**

## Utilisation

### 1. Recherche simple
Tapez dans le champ de recherche → mise à jour automatique en 300ms

### 2. Filtrage par critères
Sélectionnez les filtres → cliquez "Appliquer les filtres"

### 3. Tri
Choisissez une option de tri → mise à jour immédiate

### 4. Réinitialisation
Cliquez "Réinitialiser" pour revenir à l'état initial

## Extension pour d'autres entités

Pour ajouter cette fonctionnalité à une autre entité:

### 1. Repository
```php
public function findWithFilters(
    ?string $search = null,
    ?string $otherFilter = null,
    string $sort = 'id',
    string $direction = 'asc'
): array {
    $qb = $this->createQueryBuilder('e');
    
    if ($search) {
        $qb->andWhere($qb->expr()->like('LOWER(e.field)', ':search'))
            ->setParameter('search', '%' . strtolower($search) . '%');
    }
    
    $qb->orderBy('e.' . $sort, $direction);
    return $qb->getQuery()->getResult();
}
```

### 2. Controller
```php
#[Route('/ajax/filter', name: 'app_entity_ajax_filter', methods: ['GET'])]
public function ajaxFilter(Request $request, EntityRepository $repo): JsonResponse {
    $data = $repo->findWithFilters(
        $request->query->get('search'),
        // autres paramètres...
    );
    
    return new JsonResponse(['success' => true, 'data' => $data]);
}
```

### 3. Template
Copier-coller le panneau de filtres et adapter les IDs/noms de champs.

## Dépannage

### Pas de résultats
1. Vérifier les paramètres en console: `console.log(params.toString())`
2. Vérifier la route AJAX: `{{ path("app_classe_ajax_filter") }}`
3. Vérifier que le QueryBuilder retourne bien les données

### Performance lente
1. Ajouter un index sur les colonnes recherchées
2. Augmenter le debounce à 500ms
3. Limiter les résultats avec LIMIT

### CSRF token manquant
Les routes AJAX utilisent GET, donc pas besoin de CSRF. POST aurait besoin:
```javascript
headers: {
  'X-CSRF-Token': '{{ csrf_token('csrf_token') }}'
}
```

## Points clés retenir

1. **DQL est plus sûr que SQL direct**
2. **Toujours valider les paramètres de tri**
3. **Utiliser LOWER() pour les recherches**
4. **Debounce pour la performance**
5. **Retourner JSON, pas HTML depuis AJAX**
