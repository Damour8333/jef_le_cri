<?php
// Connexion à la base de données
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$database = 'cms_jeff'; 

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Récupérer les musiques
$stmt_musique = $conn->query("SELECT * FROM `musique`");
if (!$stmt_musique) {
    die("Erreur lors de la récupération des musiques : " . $conn->error);
}
$musique = $stmt_musique->fetch_all(MYSQLI_ASSOC);

$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musique - Jeff</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Animation CSS -->
    <style>
        /* Effet d'animation de l'apparition */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <!-- Menu fixé en haut -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-white" href="index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="poesie.php">Poésie</a></li>
                    <li class="nav-item"><a class="nav-link text-white active" href="musique.php">Musique</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="liens.php">Liens</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bandeau avec Image de Fond -->
    <header class="banner position-relative">
        <div class="container text-center text-white">
            <div class="banner-text">
                <h1>Musique</h1>
                <p>Des mélodies qui touchent l'âme et racontent une histoire.</p>
            </div>
        </div>
    </header>

    <!-- Contenu principal -->
    <main class="container my-5">
        <h2 class="text-center mb-4">Découvrez ma musique</h2>
        <p class="text-center">Plongez dans un univers sonore unique, où chaque morceau raconte une histoire.</p>

        <div class="row">
            <?php foreach ($musique as $track): ?>
                <div class="col-md-4 mb-4 fade-in">
                    <div class="card shadow-sm">
                        <img src="/site_jef/picture/jef-1.jpg" class="card-img-top" alt="<?php echo htmlspecialchars($track['titre']); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($track['titre']); ?></h5>
                            <audio controls class="w-100">
                                <source src="http://localhost/site_jef/<?php echo htmlspecialchars($track['fichier_audio']); ?>" type="audio/mpeg">
                                Votre navigateur ne supporte pas ce lecteur audio.
                            </audio>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center py-3 bg-light">
        <p>&copy; 2024 Jeff - Tous droits réservés.</p>
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript pour l'animation de défilement -->
    <script>
        // Utilisation de l'Intersection Observer pour détecter quand un élément entre dans la fenêtre
        const fadeElements = document.querySelectorAll('.fade-in');

        const observerOptions = {
            threshold: 0.3 // L'élément doit être visible à 30% pour être déclenché
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        fadeElements.forEach(element => {
            observer.observe(element);
        });
    </script>
</body>
</html>
