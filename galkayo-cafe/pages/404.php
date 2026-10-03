<?php
require __DIR__ . '/../includes/init.php';
$pageTitle = 'Page Not Found';
$currentPage = '404';
require __DIR__ . '/../includes/header.php';
?>

<section class="not-found">
    <span class="error-code">404</span>
    <h1>Page not found</h1>
    <p>The page you are looking for does not exist.</p>
    <a href="../index.php" class="btn">Back to Home</a>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
