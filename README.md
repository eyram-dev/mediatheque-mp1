# Médiathèque IPNET - Catalogue dynamique

TP1 PHP - UE IT 231 (Développement Web I) - Licence, Semestre 3, année académique 2026-2027.

## Description du projet

Mini-site en PHP qui affiche le catalogue de livres de la médiathèque IPNET.
Il n'utilise aucune base de données : les livres sont stockés dans un tableau
associatif PHP (`data/livres.php`). Le site génère ses pages dynamiquement et
protège les données affichées avec `htmlspecialchars()`.

## Prérequis

- PHP 8 ou supérieur (testé avec PHP 8.3)
- Un serveur local : WampServer, XAMPP, MAMP, ou le serveur intégré de PHP
- Aucun framework, aucune base de données

## Installation et lancement

### Avec WampServer
1. Copier le dossier `mediatheque-mp1` dans `C:\wamp64\www\`.
2. Lancer WampServer et attendre que Apache démarre.
3. Ouvrir `http://localhost/mediatheque-mp1/` dans un navigateur.

### Avec le serveur intégré de PHP
```
cd mediatheque-mp1
php -S localhost:8000
```
Puis ouvrir `http://localhost:8000/`.

## Fonctionnalités réalisées

- Page d'accueil : message de bienvenue, lien vers le catalogue, nombre total de livres et nombre de livres disponibles.
- Catalogue : tableau de tous les livres (titre, auteur, année, catégorie, prix, disponibilité) et nombre de livres affichés.
- Filtrage par catégorie via l'URL (`catalogue.php?categorie=roman`), avec vérification de la catégorie, message d'erreur et retour à l'affichage complet.
- Page détail : fiche complète d'un livre (`detail.php?id=3`), avec messages d'erreur si l'identifiant est absent, invalide ou inexistant.
- Page « À propos » : présentation statique et date du jour affichée par une fonction PHP.
- Sécurité de base : `htmlspecialchars()` sur toutes les données affichées, validation des paramètres GET.

## Structure du projet

```
mediatheque-mp1/
├── index.php
├── catalogue.php
├── detail.php
├── apropos.php
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── fonctions.php
├── data/
│   └── livres.php
├── css/
│   └── style.css
└── README.md
```

## Auteur

ASSAMAGAN Marie Alphonsine - iP Net Institute of Technology