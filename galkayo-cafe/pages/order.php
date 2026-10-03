<?php
require __DIR__ . '/../includes/init.php';
$pageTitle = 'Order';
$currentPage = 'order';

$selectedItem = isset($_GET['item']) ? findMenuItem($menuItems, $_GET['item']) : null;
$orderSent = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $orderSent = true;
}

require __DIR__ . '/../includes/header.php';
?>

<section class="page-head">
    <span class="eyebrow">Quick order</span>
    <h1>Place an Order</h1>
    <p>Choose your item and send your order request to the café.</p>
</section>

<?php if ($orderSent): ?>
    <div class="success">
        Your order request was received. We will contact you at the phone number you provided.
    </div>
<?php endif; ?>

<form class="order-form" method="post">
    <label>
        Your Name
        <input type="text" name="name" required>
    </label>

    <label>
        Phone Number
        <input type="tel" name="phone" required>
    </label>

    <label>
        Select Item
        <select name="item" required>
            <option value="">Choose an item</option>
            <?php foreach ($menuItems as $item): ?>
                <option value="<?= e($item['name']) ?>" <?= $selectedItem && $selectedItem['name'] === $item['name'] ? 'selected' : '' ?>>
                    <?= e($item['name']) ?> - <?= e($item['price']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>

    <label>
        Quantity
        <input type="number" name="quantity" min="1" value="1" required>
    </label>

    <label>
        Extra Note
        <textarea name="note" rows="4" placeholder="Optional"></textarea>
    </label>

    <button type="submit" class="btn">Send Order</button>
</form>

<?php require __DIR__ . '/../includes/footer.php'; ?>
