<?php
/**
 * detail.php - Détail d'un livre
 * L'identifiant est passé dans l'URL : detail.php?id=3
 */
require 'data/livres.php';
require 'includes/fonctions.php';

$titrePage = 'Détail du livre';
$livre     = null;
$erreur    = '';

if (!isset($_GET['id']) || $_GET['id'] === '') {
    // Cas 1 : aucun identifiant dans l'URL
    $erreur = "Aucun identifiant de livre n'a été fourni.";
} else {
    // Cas 2 : on vérifie que l'identifiant est bien un entier
    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

    if ($id === false) {
        $erreur = "L'identifiant du livre est invalide.";
    } else {
        // Cas 3 : on cherche le livre dans le tableau
        $livre = trouverLivreParId($livres, $id);

        if ($livre === null) {
            $erreur = "Aucun livre ne correspond à cet identifiant.";
        } else {
            $titrePage = $livre['titre'];
        }
    }
}

require 'includes/header.php';
?>

<?php if ($livre === null) : ?>
    <h2>Livre introuvable</h2>
    <p class="message-erreur"><?= htmlspecialchars($erreur) ?></p>
<?php else : ?>
    <h2><?= htmlspecialchars($livre['titre']) ?></h2>

    <table>
        <tr>
            <th>Auteur</th>
            <td><?= htmlspecialchars($livre['auteur']) ?></td>
        </tr>
        <tr>
            <th>Année</th>
            <td><?= htmlspecialchars((string) $livre['annee']) ?></td>
        </tr>
        <tr>
            <th>Catégorie</th>
            <td><?= htmlspecialchars($livre['categorie']) ?></td>
        </tr>
        <tr>
            <th>Prix</th>
            <td><?= number_format((float) $livre['prix'], 0, ',', ' ') ?> FCFA</td>
        </tr>
        <tr>
            <th>Disponibilité</th>
            <td><?= $livre['disponible'] ? 'Disponible' : 'Indisponible' ?></td>
        </tr>
    </table>
<?php endif; ?>

<p><a href="catalogue.php">&larr; Retour au catalogue</a></p>

<?php require 'includes/footer.php'; ?>