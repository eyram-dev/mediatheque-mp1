<?php
/**
 * index.php - Page d'accueil
 * Affiche un message de bienvenue, un lien vers le catalogue
 * et les statistiques calculées à partir du tableau $livres.
 */
require 'data/livres.php';
require 'includes/fonctions.php';

$titrePage = 'Accueil';
$totalLivres = count($livres);
$totalDisponibles = compterLivresDisponibles($livres);

require 'includes/header.php';
?>

<h2>Bienvenue à la médiathèque IPNET</h2>
<p>Découvrez notre catalogue de livres : romans, contes, théâtre, poésie et essais.</p>

<p>
    La médiathèque compte <strong><?= $totalLivres ?></strong> livres,
    dont <strong><?= $totalDisponibles ?></strong> disponibles actuellement.
</p>

<p><a href="catalogue.php">Consulter le catalogue</a></p>

<?php require 'includes/footer.php'; ?>