<?php
// Inclure la configuration
include_once 'includes/config.php';

// Connexion à la base de données
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$database = 'cms_jeff'; 

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupérer les poèmes
$stmt_poemes = $conn->query("SELECT * FROM `poemes`");
$poemes = $stmt_poemes->fetch_all(MYSQLI_ASSOC);

// Récupérer la musique
$stmt_musique = $conn->query("SELECT * FROM `musique`");
$musique = $stmt_musique->fetch_all(MYSQLI_ASSOC);

// Récupérer les images du carrousel
$stmt_images = $conn->query("SELECT * FROM `images_carrousel`");
$images_carrousel = $stmt_images->fetch_all(MYSQLI_ASSOC);

$conn->close();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeff - Poésie et Musique</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/style.css">
</head>
<body>
    <!-- Menu fixé en haut -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-white" href="<?php echo BASE_URL; ?>views/poesie.php">Poésie</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="<?php echo BASE_URL; ?>views/liens.php">Liens</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="<?php echo BASE_URL; ?>views/musique.php">Musique</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bandeau avec Image de Fond -->
    <header class="banner position-relative">
        <div class="container text-center text-white">
            <div class="banner-text">
                <h1>Jef le Cri</h1>
                <p>Poésie, musique et plus encore.</p>
            </div>
        </div>
    </header>

    <!-- Section Poèmes -->
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

    <!-- Section Musique -->
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

    <!-- Carrousel -->
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

    <!-- Footer -->
    <footer class="text-center py-3 bg-light">
        <p>&copy; 2024 Jeff - Tous droits réservés.</p>
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo ASSETS_URL; ?>js/script.js"></script>
</body>
</html>
