<nav class="main-nav">
    <?php $prefix = $currentPage === 'home' ? 'pages/' : ''; ?>
    <a href="<?= $prefix ?>menu.php" class="<?= $currentPage === 'menu' ? 'active' : '' ?>">Menu</a>
    <a href="<?= $prefix ?>food.php" class="<?= $currentPage === 'food' ? 'active' : '' ?>">Food</a>
    <a href="<?= $prefix ?>order.php" class="<?= $currentPage === 'order' ? 'active' : '' ?>">Order</a>
    <a href="<?= $prefix ?>about.php" class="<?= $currentPage === 'about' ? 'active' : '' ?>">About</a>
    <a href="<?= $prefix ?>contact.php" class="<?= $currentPage === 'contact' ? 'active' : '' ?>">Contact</a>
</nav>
