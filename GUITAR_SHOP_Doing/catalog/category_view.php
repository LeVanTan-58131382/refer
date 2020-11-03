<?php include '../view/header.php'; ?>
<?php include '../view/sidebar.php'; ?>
<div class="ad-part-content">
    <div class="noidungcon">

        <h1><?php echo htmlspecialchars($category_name); ?></h1>
        <?php if (count($products) == 0) : ?>
            <p>There are no products in this category.</p>
        <?php else : ?>
            <?php foreach ($products as $product) : ?>
                <p>
                    <a href="<?php echo '?product_id=' . $product['productID']; ?>">
                        <?php echo htmlspecialchars($product['productName']); ?>
                    </a>
                </p>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
</div>

<style>
    .noidungcon {
        position: relative;
        left: 0%;
        top: 0%;
        width: 100%;
        height: 100%;
        /* border: 1px solid black; */
        border-radius: 5px;
        padding: 30px;
    }
</style>
<?php include '../view/footer.php'; ?>