<?php
require __DIR__ . '/../includes/init.php';
$pageTitle = 'About Us';
$currentPage = 'about';
require __DIR__ . '/../includes/header.php';
?>

<section class="page-head">
    <span class="eyebrow">Our story</span>
    <h1>About <?= e($site['name']) ?></h1>
    <p><?= e($site['name']) ?> opened in 2020. We serve fresh coffee and Somali tea in a friendly place for the people of Galkayo.</p>
</section>

<section class="about-box">
    <div>
        <h2>Our Team</h2>
        <p>Meet the people who keep the café running every day.</p>
    </div>
    <ul class="team">
        <?php foreach ($team as $member): ?>
            <li>
                <strong><?= e($member['name']) ?></strong>
                <span><?= e($member['role']) ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
