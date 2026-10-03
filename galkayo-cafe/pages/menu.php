<?php
require __DIR__ . '/../includes/init.php';
$pageTitle = 'Menu';
$currentPage = 'menu';
require __DIR__ . '/../includes/header.php';
?>

<section class="page-head">
    <span class="eyebrow">Fresh every day</span>
    <h1>Our Menu</h1>
    <p>We have <?= count($menuItems) ?> items, from Somali tea and coffee to snacks and cake.</p>
</section>

<div class="grid">
    <?php foreach ($menuItems as $item): ?>
        <?php require __DIR__ . '/../includes/menu-card.php'; ?>
    <?php endforeach; ?>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
