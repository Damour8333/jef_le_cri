<?php
$title = "Liens"; // Titre de la page
include('includes/header.php'); // Inclus l'en-tête
include('includes/navbar.php'); // Inclus la barre de navigation
?>

<?php
$banner_title = "Mes Liens";
$banner_subtitle = "Poésie, musique et plus encore.";
include('includes/banner.php'); // Inclus le bandeau
?>

<main class="container my-5">
    <h2 class="mb-4">Suivez-moi sur mes différentes plateformes</h2>
    <p>Explorez mes œuvres et restez connecté via ces liens.</p>

    <?php include('includes/links-list.php'); // Inclus la liste des liens ?>
</main>

<?php include('includes/footer.php'); // Inclus le pied de page ?>
