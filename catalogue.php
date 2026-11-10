<?php
/**
 * catalogue.php - Liste des livres avec filtre par catégorie
 * Le filtre passe par l'URL : catalogue.php?categorie=roman
 */
require 'data/livres.php';
require 'includes/fonctions.php';

$titrePage = 'Catalogue';

// Liste des catégories existantes (sans doublons)
$categories = array_values(array_unique(array_column($livres, 'categorie')));

// Par défaut : tous les livres, aucun filtre
$livresAffiches  = $livres;
$categorieActive = '';
$erreur          = false;
$demande         = $_GET['categorie'] ?? '';

// Un filtre a été demandé : on vérifie qu'il est valide
if ($demande !== '') {
    if (is_string($demande) && in_array($demande, $categories, true)) {
        $categorieActive = $demande;
        $livresAffiches  = filtrerParCategorie($livres, $demande);
    } else {
        // Catégorie inconnue : on n'affiche aucun livre et on signale l'erreur
        $erreur         = true;
        $livresAffiches = [];
    }
}

require 'includes/header.php';
?>

<h2>Catalogue des livres</h2>

<!-- Filtres par catégorie -->
<div class="filtres">
    <a href="catalogue.php" class="<?= ($categorieActive === '' && !$erreur) ? 'actif' : '' ?>">Tous</a>
    <?php foreach ($categories as $cat) : ?>
        <a href="catalogue.php?categorie=<?= urlencode($cat) ?>"
           class="<?= ($cat === $categorieActive) ? 'actif' : '' ?>">
            <?= htmlspecialchars(ucfirst($cat)) ?>
        </a>
    <?php endforeach; ?>
</div>

<?php if ($erreur) : ?>
    <p class="message-erreur">
        La catégorie « <?= is_string($demande) ? htmlspecialchars($demande) : '' ?> » n'existe pas.
        <a href="catalogue.php">Revenir au catalogue complet</a>
    </p>
<?php else : ?>
    <p><strong><?= count($livresAffiches) ?></strong> livre(s) affiché(s)</p>

    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Année</th>
                <th>Catégorie</th>
                <th>Prix</th>
                <th>Disponibilité</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($livresAffiches as $livre) : ?>
                <?= afficherLivre($livre) ?>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

<?php require 'includes/footer.php'; ?>