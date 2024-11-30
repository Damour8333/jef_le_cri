<?php
// Inclure la configuration de base
include_once '../includes/config.php';
include_once '../includes/db.php';

// Récupérer les informations nécessaires pour la page d'accueil
include_once '../includes/functions.php';

// Charger les données (si nécessaire pour l'accueil)
$poemes = getAll($conn, 'poemes');
$musique = getAll($conn, 'musique');
$images_carrousel = getAll($conn, 'images_carrousel');

// Inclure l'en-tête HTML
include_once '../includes/header.php';
?>

<!-- Bandeau principal -->
<header class="banner position-relative">
    <div class="container text-center text-white">
        <div class="banner-text">
            <h1>Bienvenue sur le site de Jeff</h1>
            <p>Découvrez mes poèmes, ma musique et mon univers artistique.</p>
        </div>
    </div>
</header>

<!-- Section Poèmes -->
<section id="poesie-card" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Découvrez mes poèmes</h2>
        <?php foreach ($poemes as $poeme): ?>
            <div class="card shadow-lg mx-auto mb-3" style="max-width: 600px;">
                <div class="card-body">
                    <h5 class="card-title text-center"><?php echo htmlspecialchars($poeme['titre']); ?></h5>
                    <p class="card-text"><?php echo nl2br(htmlspecialchars($poeme['contenu'])); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Section Musique -->
<section class="audio-player text-center py-4">
    <div class="container">
        <h2 class="text-center mb-4">Écoutez ma musique</h2>
        <?php foreach ($musique as $track): ?>
            <div class="custom-audio-player mb-3">
                <audio preload="metadata" controls>
                    <source src="<?php echo ASSETS_URL . 'music/' . htmlspecialchars($track['fichier_audio']); ?>" type="audio/mp3">
                    Votre navigateur ne supporte pas l'élément audio.
                </audio>
                <p><?php echo htmlspecialchars($track['titre']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Carrousel -->
<!-- Carrousel -->
<section id="carrousel" class="my-5">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($images_carrousel as $index => $image): ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                    <img src="<?php echo ASSETS_URL . 'images/' . htmlspecialchars($image['image_path']); ?>" class="d-block mx-auto custom-carousel-img" alt="Image du carrousel">
                </div>
            <?php endforeach; ?>
        </div>
        <!-- Contrôles du carrousel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>
</section>


<!-- Inclure le pied de page -->
<?php include_once '../includes/footer.php'; ?>
