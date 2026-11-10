<?php
/**
 * data/livres.php
 * Catalogue de la médiathèque IPNET (sans base de données).
 * Chaque livre est un tableau associatif.
 */

$livres = [
    [
        'id'         => 1,
        'titre'      => 'Germinal',
        'auteur'     => 'Émile Zola',
        'annee'      => 1885,
        'categorie'  => 'roman',
        'prix'       => 4000,
        'disponible' => true,
    ],
    [
        'id'         => 2,
        'titre'      => 'Les Misérables',
        'auteur'     => 'Victor Hugo',
        'annee'      => 1862,
        'categorie'  => 'roman',
        'prix'       => 6500,
        'disponible' => true,
    ],
    [
        'id'         => 3,
        'titre'      => "L'Étranger",
        'auteur'     => 'Albert Camus',
        'annee'      => 1942,
        'categorie'  => 'roman',
        'prix'       => 3500,
        'disponible' => false,
    ],
    [
        'id'         => 4,
        'titre'      => 'Clean Code',
        'auteur'     => 'Robert C. Martin',
        'annee'      => 2008,
        'categorie'  => 'informatique',
        'prix'       => 25000,
        'disponible' => true,
    ],
    [
        'id'         => 5,
        'titre'      => "Introduction à l'algorithmique",
        'auteur'     => 'Thomas H. Cormen',
        'annee'      => 1990,
        'categorie'  => 'informatique',
        'prix'       => 30000,
        'disponible' => true,
    ],
    [
        'id'         => 6,
        'titre'      => 'Sapiens : Une brève histoire de l\'humanité',
        'auteur'     => 'Yuval Noah Harari',
        'annee'      => 2011,
        'categorie'  => 'histoire',
        'prix'       => 10000,
        'disponible' => true,
    ],
    [
        'id'         => 7,
        'titre'      => 'Contes de ma mère l\'Oye',
        'auteur'     => 'Charles Perrault',
        'annee'      => 1697,
        'categorie'  => 'conte',
        'prix'       => 3000,
        'disponible' => false,
    ],
    [
        'id'         => 8,
        'titre'      => 'Le Petit Prince',
        'auteur'     => 'Antoine de Saint-Exupéry',
        'annee'      => 1943,
        'categorie'  => 'conte',
        'prix'       => 3500,
        'disponible' => true,
    ],
];