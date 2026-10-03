<?php
require __DIR__ . '/includes/init.php';

$pageTitle = 'Home';
$currentPage = 'home';

require __DIR__ . '/includes/header.php';

$favourites = featuredItems($menuItems);
?>

<section class="hero">
    <div class="hero-content">
        <span class="eyebrow"><?= greeting() ?></span>
        <h1>Welcome to <?= e($site['name']) ?></h1>
        <p>Fresh coffee, Somali tea and tasty snacks in the heart of Galkayo.</p>
        <div class="hero-actions">
            <a href="pages/menu.php" class="btn">View Menu</a>
            <a href="pages/order.php" class="btn btn-outline">Order Now</a>
        </div>
    </div>
</section>

<section class="section">
    <div class="section-head">
        <span class="eyebrow">What we serve</span>
        <h2>Today's Favourites</h2>
        <p>Freshly prepared drinks and snacks for every time of day.</p>
    </div>

    <div class="grid">
        <?php foreach ($favourites as $item): ?>
            <?php require __DIR__ . '/includes/menu-card.php'; ?>
        <?php endforeach; ?>
    </div>
</section>

<section class="cta">
    <div>
        <span class="eyebrow">Visit us</span>
        <h2>Good coffee. Good food. Good moments.</h2>
        <p><?= e($site['address']) ?> · <?= e($site['phone']) ?></p>
    </div>
    <a href="pages/contact.php" class="btn">Contact Us</a>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
