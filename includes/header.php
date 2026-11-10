<?php
/**
 * includes/header.php
 * En-tête commun : début du HTML et menu de navigation.
 * La page qui l'inclut peut définir $titrePage avant le require.
 */
if (!isset($titrePage)) {
    $titrePage = 'Médiathèque IPNET';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titrePage) ?> | Médiathèque IPNET</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Médiathèque IPNET</h1>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="catalogue.php">Catalogue</a>
            <a href="apropos.php">À propos</a>
        </nav>
    </header>
    <main>