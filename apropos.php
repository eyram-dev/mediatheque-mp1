<?php
/**
 * apropos.php - Page de présentation de la médiathèque
 * Utilise la fonction dateDuJour() pour afficher la date.
 */
require 'includes/fonctions.php';

$titrePage = 'À propos';
require 'includes/header.php';
?>

<h2>À propos de la médiathèque IPNET</h2>

<p>
    La médiathèque IPNET met à disposition des étudiants et du personnel
    une collection de livres variés : littérature, contes, théâtre,
    poésie et essais.
</p>
<p>
    Ce site est un premier projet réalisé en PHP, sans base de données :
    les livres sont stockés dans un tableau PHP.
</p>

<p><em>Nous sommes le <?= htmlspecialchars(dateDuJour()) ?>.</em></p>

<?php require 'includes/footer.php'; ?>