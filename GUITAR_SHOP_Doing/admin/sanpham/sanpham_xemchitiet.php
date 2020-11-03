<?php include '../../view/header.php'; ?>
<?php include '../../view/sidebar_admin.php'; ?>
<?php if (!isset($product_order_count)) {
    $product_order_count = 0;
} ?>
<div class="ad-part-content">
    <div class="noidungcon">

        <h1>Quản Lý Sản Phẩm - Xem Sản Phẩm</h1>

        <!-- display product -->
        <?php include '../../view/product.php'; ?>

        <!-- display buttons -->
        <br>
        <div id="edit_and_delete_buttons">
            <form action="." method="post" id="edit_button_form">
                <input type="hidden" name="action" value="show_add_edit_form">
                <input type="hidden" name="product_id" value="<?= $product['productID']; ?>">
                <input type="hidden" name="category_id" value="<?= $product['categoryID']; ?>">
                <input type="submit" value="Cập nhật sản phẩm">
            </form>
            <?php if ($product_order_count == 0) : ?>
                <form action="." method="post" id="delete_button_form">
                    <input type="hidden" name="action" value="delete_product">
                    <input type="hidden" name="product_id" value="<?= $product['productID']; ?>">
                    <input type="hidden" name="category_id" value="<?= $product['categoryID']; ?>">
                    <input type="submit" value="Xóa sản phẩm">
                </form>
            <?php endif; ?>
        </div>
        <div id="image_manager">
            <h1>Quản lý ảnh sản phẩm</h1>
            <form action="." method="post" enctype="multipart/form-data" id="upload_image_form">
                <input type="hidden" name="action" value="upload_image">
                <input type="file" name="file1"><br>
                <input type="hidden" name="product_id" value="<?= $product['productID']; ?>">
                <input type="submit" value="Upload Image">
            </form>
            <p><a href="../../images/<?= $product['productCode']; ?>.png">
                    Xem ảnh cỡ lớn</a></p>
            <p><a href="../../images/<?= $product['productCode']; ?>_s.png">
                    Xem ảnh cỡ nhỏ</a></p>
        </div>
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
<?php include '../../view/footer.php'; ?>