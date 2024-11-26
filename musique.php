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
</head>
<body>
    <!-- Bandeau avec image et menu intégré -->
    <header class="banner position-relative">
        <div class="container text-center text-white">
            <!-- Texte principal -->
            <div class="banner-text">
                <h1>Musique</h1>
                <p>Des mélodies qui touchent l'âme et racontent une histoire.</p>
            </div>
        </div>
        <!-- Menu intégré dans la bannière -->
        <nav class="navbar navbar-expand-lg navbar-dark position-absolute w-100">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link text-white" href="index.html">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="poesie.html">Poésie</a></li>
                        <li class="nav-item"><a class="nav-link text-white active" href="musique.html">Musique</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="liens.html">Liens</a></li>
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Contenu principal -->
    <main class="container my-5">
        <h2 class="mb-4 text-center">Découvrez ma musique</h2>
        <p class="text-center">Plongez dans un univers sonore unique, où chaque morceau raconte une histoire.</p>
        
        <div class="row">
            <!-- Musique 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="picture/IMG_20240912_124644.jpg" class="card-img-top" alt="Musique 1">
                    <div class="card-body">
                        <h5 class="card-title">Le scaphandrier</h5>
                        <p class="card-text">Un voyage musical inspiré de mes expériences uniques.</p>
                        <audio controls class="w-100">
                            <source src="music/le scaphandrier mastering ville défigurée - 10_10_2023 14.41.mp3" type="audio/mpeg">
                            Votre navigateur ne supporte pas ce lecteur audio.
                        </audio>
                    </div>
                </div>
            </div>

            <!-- Musique 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="picture/jef 5.jpg" class="card-img-top" alt="Musique 2">
                    <div class="card-body">
                        <h5 class="card-title">Céleste</h5>
                        <p class="card-text">Un mélange de rythmes et de paroles qui touchent le cœur.</p>
                        <audio controls class="w-100">
                            <source src="music/Céleste mastering ville défigurée - 10_10_2023 14.19.mp3" type="audio/mpeg">
                            Votre navigateur ne supporte pas ce lecteur audio.
                        </audio>
                    </div>
                </div>
            </div>

            <!-- Musique 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="picture/jef1.jpg" class="card-img-top" alt="Musique 3">
                    <div class="card-body">
                        <h5 class="card-title">Les mots </h5>
                        <p class="card-text">Des sonorités douces pour une ambiance apaisante.</p>
                        <audio controls class="w-100">
                            <source src="music/les mots mastering ville défigurée - 10_10_2023 14.29.mp3" type="audio/mpeg">
                            Votre navigateur ne supporte pas ce lecteur audio.
                        </audio>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Pied de page -->
    <footer class="text-center py-3 bg-light">
        <p>&copy; 2024 Jeff - Tous droits réservés.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
