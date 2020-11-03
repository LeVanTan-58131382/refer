<?php
// Parse data
$category_id = $product['categoryID'];
$product_code = $product['productCode'];
$product_name = $product['productName'];
$description = $product['description'];
$list_price = $product['listPrice'];
$discount_percent = $product['discountPercent'];

// Add HMTL tags to the description
$description_with_tags = add_tags($description);

// Calculate discounts
$discount_amount = round($list_price * ($discount_percent / 100), 2);
$unit_price = $list_price - $discount_amount;

// Format discounts
$discount_percent_f = number_format($discount_percent, 0);
$discount_amount_f = number_format($discount_amount, 2);
$unit_price_f = number_format($unit_price, 2);

// Get image URL and alternate text
$image_filename = $product_code . '.jpg';
$image_path = $app_path . 'images/' . $image_filename;
$image_alt = 'Image filename: ' . $image_filename;
?>
<h1><?= htmlspecialchars($product_name); ?></h1>
<div id="left_column">
    <div class="anh_sanpham">
        <p><img src="<?= $image_path; ?>" alt="<?= $image_alt; ?>" /></p>
    </div>
</div>


<div id="right_column">
    <p><b>Bảng giá:</b>
        <?= '$' . $list_price; ?></p>
    <p><b>Giảm giá:</b>
        <?= $discount_percent_f . '%'; ?></p>
    <p><b>Giá dành cho bạn:</b>
        <?= '$' . $unit_price_f; ?>
        (Bạn tiết kiệm
        <?= '$' . $discount_amount_f; ?>)</p>

    <!-- Nếu hiển thị trên trang của admin thì không hiển thị phần này -->
    <?php if (!isset($_SESSION["admin"])) { ?>
        <form action="<?= $app_path . 'cart' ?>" method="get" id="add_to_cart_form">
            <input type="hidden" name="action" value="add" />
            <input type="hidden" name="product_id" value="<?= $product_id; ?>" />
            <b>Số lượng:</b>&nbsp;
            <input type="text" name="quantity" value="1" size="2" />
            <input type="submit" value="Thêm vào giỏ" />
        </form>
    <?php } ?>
    <h2>Mô tả</h2>
    <?= $description_with_tags; ?>
</div>