<?php
include_once 'includes/db.php';
include_once 'includes/functions.php';
$poems = getPoems($conn);
include_once 'includes/header.php';
?>

<main class="container my-5">
    <section id="poesie">
        <h2 class="mb-4">Mes Poèmes</h2>
        <?php if (!empty($poems)): ?>
            <?php foreach ($poems as $poem): ?>
                <div class="poem mb-5">
                    <h5><?php echo htmlspecialchars($poem['title']); ?></h5>
                    <pre><?php echo nl2br(htmlspecialchars($poem['content'])); ?></pre>
                    <p class="text-muted">Publié le <?php echo htmlspecialchars($poem['created_at']); ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucun poème n'est encore disponible.</p>
        <?php endif; ?>
    </section>
</main>

<?php include_once 'includes/footer.php'; ?>
