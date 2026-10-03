<article class="card">
    <img class="card-image" src="<?= $currentPage === 'home' ? 'assets/images/' : '../assets/images/' ?><?= e($item['image']) ?>" alt="<?= e($item['name']) ?>">
    <div class="card-body">
        <span class="tag"><?= e($item['category']) ?></span>
        <h3><?= e($item['name']) ?></h3>
        <p><?= e($item['description']) ?></p>
        <div class="card-bottom">
            <strong class="price"><?= e($item['price']) ?></strong>
            <a href="<?= $currentPage === 'home' ? 'pages/order.php' : 'order.php' ?>?item=<?= urlencode($item['name']) ?>">Order</a>
        </div>
    </div>
</article>
