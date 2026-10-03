</main>

<footer class="site-footer">
    <div class="container footer-inner">
        <div>
            <p class="footer-name">☕ <?= e($site['name']) ?></p>
            <p><?= e($site['address']) ?></p>
        </div>
        <div>
            <p><?= e($site['phone']) ?></p>
            <p><?= e($site['email']) ?></p>
        </div>
    </div>
    <div class="container footer-bottom">
        <p>&copy; <?= date('Y') ?> <?= e($site['name']) ?>. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
