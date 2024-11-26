<?php
// Informations de connexion à la base de données
$host = "127.0.0.1"; // ou localhost
$username = "root"; // Remplace par ton utilisateur MySQL
$password = ""; // Remplace par ton mot de passe
$dbname = "cms_jeff"; // Nom de ta base de données

// Connexion à MySQL
$conn = new mysqli($host, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poésie - Jeff</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Bandeau avec Image de Fond et Menu -->
    <header class="banner position-relative">
        <div class="container text-center text-white">
            <div class="banner-text">
                <h1>Poésie</h1>
                <p>Un voyage à travers les mots.</p>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark position-absolute w-100">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link text-white" href="index.php">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link text-white active" href="poesie.php">Poésie</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="liens.php">Liens</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="musique.php">Musique</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Section Poèmes -->
    <main class="container my-5">
        <section id="poesie">
            <h2 class="mb-4">Mes Poèmes</h2>
            <?php
            // Requête pour récupérer tous les poèmes
            $sql = "SELECT id, title, content, created_at FROM poems";
            $result = $conn->query($sql);

            // Vérifie s'il y a des résultats
            if ($result->num_rows > 0) {
                // Afficher chaque poème
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='poem mb-5'>";
                    echo "<h5>" . htmlspecialchars($row['title']) . "</h5>";
                    echo "<pre>" . nl2br(htmlspecialchars($row['content'])) . "</pre>";
                    echo "<p class='text-muted'>Publié le " . htmlspecialchars($row['created_at']) . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>Aucun poème n'est encore disponible.</p>";
            }
            ?>
        </section>
    </main>

    <footer class="text-center py-3 bg-light">
        <p>&copy; 2024 Jeff - Tous droits réservés.</p>
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>

<?php
// Fermer la connexion
$conn->close();
?>
