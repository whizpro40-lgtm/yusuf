<?php
require __DIR__ . '/../includes/init.php';
$pageTitle = 'Contact Us';
$currentPage = 'contact';
require __DIR__ . '/../includes/header.php';

$today = date('l');
?>

<section class="page-head">
    <span class="eyebrow">Get in touch</span>
    <h1>Contact Us</h1>
    <p>Visit us, call us or send us an email.</p>
</section>

<div class="contact-grid">
    <div class="info-box">
        <h2>Contact Details</h2>
        <p><strong>Address</strong><?= e($site['address']) ?></p>
        <p><strong>Phone</strong><?= e($site['phone']) ?></p>
        <p><strong>Email</strong><?= e($site['email']) ?></p>
    </div>

    <div>
        <h2>Opening Hours</h2>
        <table>
            <tr><th>Day</th><th>Hours</th></tr>
            <?php foreach ($openingHours as $day => $hours): ?>
                <tr class="<?= $day === $today ? 'today' : '' ?>">
                    <td><?= e($day) ?><?= $day === $today ? ' (Today)' : '' ?></td>
                    <td><?= e($hours) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
