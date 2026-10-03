<?php
require __DIR__ . '/../includes/init.php';
$pageTitle = 'Food';
$currentPage = 'food';
require __DIR__ . '/../includes/header.php';

$foodItems = array_values(array_filter($menuItems, function ($item) {
    return $item['category'] === 'Snacks';
}));
?>

<section class="page-head">
    <span class="eyebrow">Made fresh</span>
    <h1>Food & Snacks</h1>
    <p>Simple, tasty snacks prepared for our café guests.</p>
</section>

<div class="grid">
    <?php foreach ($foodItems as $item): ?>
        <?php require __DIR__ . '/../includes/menu-card.php'; ?>
    <?php endforeach; ?>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
