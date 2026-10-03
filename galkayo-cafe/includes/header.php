<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($pageTitle) ?> | <?= e($site['name']) ?></title>
    <link rel="stylesheet" href="<?= $currentPage === 'home' ? 'assets/css/style.css' : '../assets/css/style.css' ?>">
</head>
<body>
<header class="site-header">
    <div class="container header-inner">
        <a href="<?= $currentPage === 'home' ? 'index.php' : '../index.php' ?>" class="logo">
            <span class="logo-mark">☕</span>
            <span><?= e($site['name']) ?></span>
        </a>
        <?php require __DIR__ . '/nav.php'; ?>
    </div>
</header>

<main class="container">
