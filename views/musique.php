<?php
include_once 'includes/db.php';

// Requête pour récupérer les musiques
$stmt_musique = $conn->query("SELECT * FROM musique");
if (!$stmt_musique) {
    die("Erreur lors de la récupération des musiques : " . $conn->error);
}
$musique = $stmt_musique->fetch_all(MYSQLI_ASSOC);

$conn->close();
?>

<?php include_once 'includes/header.php'; ?>

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

<?php include_once 'includes/footer.php'; ?>
