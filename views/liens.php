<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeff - Liens</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
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
                    <li class="nav-item"><a class="nav-link text-white" href="index.php">Acceuil</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="poesie.php">Poésie</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="liens.php">Liens</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="musique.php">Musique</a></li>
                </ul>
            </div>
        </div>
    </nav>

    
    <!-- Bandeau avec Image de Fond -->
    <header class="banner position-relative">
        <div class="container text-center text-white">
            <div class="banner-text">
                <h1>Liens</h1>
                <p>Poésie, musique et plus encore.</p>
            </div>
        </div>
    </header>
    

    <main class="container my-5">
        <h2 class="mb-4">Mes Liens</h2>
        <p>Suivez-moi sur mes différentes plateformes :</p>
        
        <div class="list-group">
            <!-- Lien YouTube -->
            <a href="https://youtube.com/@JEFLECRI" class="list-group-item list-group-item-action d-flex align-items-center" target="_blank">
                <img src="picture/jef 2.jpg" alt="YouTube" class="me-3" style="width: 40px; height: 40px;">
                <span>YouTube - Jef le Cri</span>
            </a>

            <!-- Lien Wattpad -->
            <a href="https://wattpad.com/1487623608-po%C3%A9sie-sans-histoire-polaroid" class="list-group-item list-group-item-action d-flex align-items-center" target="_blank">
                <img src="picture/jef-2.jpg" alt="Wattpad" class="me-3" style="width: 40px; height: 40px;">
                <span>Wattpad - Poésie sans histoire</span>
            </a>

            <!-- Lien Wixsite -->
            <a href="https://gentilinidavid.wixsite.com/site/cuverville" class="list-group-item list-group-item-action d-flex align-items-center" target="_blank">
                <img src="picture/jef-8.jpg" alt="Wixsite" class="me-3" style="width: 40px; height: 40px;">
                <span>Mon site Wix</span>
            </a>

            <!-- Lien Instagram - Terre des Livres -->
            <a href="https://instagram.com/terre_des_livres/?hl=fr" class="list-group-item list-group-item-action d-flex align-items-center" target="_blank">
                <img src="picture/jef-6.jpg" alt="Instagram" class="me-3" style="width: 40px; height: 40px;">
                <span>Instagram - Terre des Livres</span>
            </a>

            <!-- Lien Instagram général -->
            <a href="https://instagram.com/?hl=fr" class="list-group-item list-group-item-action d-flex align-items-center" target="_blank">
                <img src="picture/jef-5.jpg" alt="Instagram" class="me-3" style="width: 40px; height: 40px;">
                <span>Instagram</span>
            </a>
        </div>
    </main>

    <footer class="text-center py-3 bg-light">
        <p>&copy; 2024 Jeff - Tous droits réservés.</p>
        
           Qolorem dignissimos libero suscipit.</p>
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>