<?php
/**
 * includes/fonctions.php
 * Fonctions utilitaires de la médiathèque IPNET.
 */

/**
 * Génère la carte HTML d'un livre pour le catalogue.
 * Toutes les données sont échappées avec htmlspecialchars().
 */
function afficherLivre(array $livre): string
{
    $id         = (int) $livre['id'];
    $titre      = htmlspecialchars($livre['titre']);
    $auteur     = htmlspecialchars($livre['auteur']);
    $annee      = htmlspecialchars((string) $livre['annee']);
    $categorie  = htmlspecialchars(ucfirst($livre['categorie']));
    $prix       = number_format((float) $livre['prix'], 0, ',', ' ') . ' FCFA';
    $dispo      = $livre['disponible'] ? 'Disponible' : 'Indisponible';
    $classe     = $livre['disponible'] ? 'oui' : 'non';

    return "<article class=\"carte\">
        <span class=\"badge-categorie\">$categorie</span>
        <h3><a href=\"detail.php?id=$id\">$titre</a></h3>
        <p class=\"auteur\">$auteur</p>
        <p class=\"infos\">$annee &middot; $prix</p>
        <span class=\"dispo $classe\">$dispo</span>
        <a class=\"bouton\" href=\"detail.php?id=$id\">Voir le détail</a>
    </article>";
}

/**
 * Retourne uniquement les livres appartenant à la catégorie demandée.
 */
function filtrerParCategorie(array $livres, string $categorie): array
{
    $resultat = [];

    foreach ($livres as $livre) {
        if ($livre['categorie'] === $categorie) {
            $resultat[] = $livre;
        }
    }

    return $resultat;
}

/**
 * Cherche un livre par son identifiant.
 * Retourne le livre trouvé, ou null s'il n'existe pas.
 */
function trouverLivreParId(array $livres, int $id): ?array
{
    foreach ($livres as $livre) {
        if ($livre['id'] === $id) {
            return $livre;
        }
    }

    return null;
}

/**
 * Compte les livres dont la clé 'disponible' vaut true.
 */
function compterLivresDisponibles(array $livres): int
{
    $total = 0;

    foreach ($livres as $livre) {
        if ($livre['disponible']) {
            $total++;
        }
    }

    return $total;
}

/**
 * Retourne la date du jour en français (ex. : mardi 10 novembre 2026).
 */
function dateDuJour(): string
{
    $jours = ['dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi'];
    $mois  = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin',
              'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];

    $jourSemaine = $jours[(int) date('w')];
    $jour        = date('j');
    $nomMois     = $mois[(int) date('n') - 1];
    $annee       = date('Y');

    return "$jourSemaine $jour $nomMois $annee";
}