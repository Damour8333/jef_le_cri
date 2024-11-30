<?php
include_once '../includes/config.php';
include_once '../includes/db.php';
include_once '../includes/functions.php';

// Récupération des données
$poemes = getAll($conn, 'poemes');
$musique = getAll($conn, 'musique');
$images_carrousel = getAll($conn, 'images_carrousel');

include_once '../includes/header.php';
?>
<header class="banner position-relative">
    <div class="container text-center text-white">
        <div class="banner-text">
            <h1>Jef le Cri</h1>
            <p>Poésie, musique et plus encore.</p>
        </div>
    </div>
</header>
<section id="poesie-card" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Découvrez mes poèmes</h2>
        <?php foreach ($poemes as $poeme): ?>
            <div class="card shadow-lg mx-auto" style="max-width: 600px;">
                <div class="card-body">
                    <h5 class="card-title text-center"><?php echo htmlspecialchars($poeme['titre']); ?></h5>
                    <p class="card-text"><?php echo nl2br(htmlspecialchars($poeme['contenu'])); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<section class="audio-player text-center py-4">
    <div class="container">
        <?php foreach ($musique as $track): ?>
            <div class="custom-audio-player">
                <audio id="audio-player" preload="metadata" controls>
                    <source src="<?php echo ASSETS_URL . 'music/' . htmlspecialchars($track['fichier_audio']); ?>" type="audio/mp3">
                    Votre navigateur ne supporte pas l'élément audio.
                </audio>
                <p><?php echo htmlspecialchars($track['titre']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<section id="carrousel" class="my-5">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($images_carrousel as $index => $image): ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                    <img src="<?php echo ASSETS_URL . 'images/' . htmlspecialchars($image['image_path']); ?>" class="d-block w-50" alt="Image du carrousel">
                </div>
            <?php endforeach; ?>
        </div>
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
<?php include_once '../includes/footer.php'; ?>
