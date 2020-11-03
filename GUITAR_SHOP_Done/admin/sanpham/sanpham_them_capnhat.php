<?php include '../../view/header.php'; ?>
<?php include '../../view/sidebar_admin.php'; ?>
<main>
    <?php
    if (isset($product_id)) {
        $heading_text = 'Cập nhật sản phẩm'; ?>

        <h1>Quản Lý Sản Phẩm - <?= $heading_text; ?></h1>
        <form action="index.php" method="post" id="add_product_form">
            <?php if (isset($product_id)) : ?>
                <input type="hidden" name="action" value="capnhat_sanpham">
                <input type="hidden" name="product_id" value="<?= $product_id; ?>">
            <?php else : ?>
                <input type="hidden" name="action" value="them_sanpham">
            <?php endif; ?>
            <input type="hidden" name="category_id" value="<?= $product['categoryID']; ?>">

            <label>Loại sản phẩm:</label>
            <select name="category_id">
                <?php foreach ($categories as $category) :
                    if ($category['categoryID'] == $product['categoryID']) {
                        $selected = 'selected';
                    } else {
                        $selected = '';
                    }
                ?>
                    <option value="<?= $category['categoryID']; ?>" <?php
                                                                    echo $selected ?>>
                        <?= htmlspecialchars($category['categoryName']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <br>

            <label>Mã:</label>
            <input type="text" name="code" value="<?= htmlspecialchars($product['productCode']); ?>">
            <br>

            <label>Tên:</label>
            <input type="text" name="name" value="<?= htmlspecialchars($product['productName']); ?>" size="50">
            <br>

            <label>Bảng giá:</label>
            <input type="text" name="price" value="<?= $product['listPrice']; ?>">
            <br>

            <label>Phần trăm giảm giá:</label>
            <input type="text" name="discount_percent" value="<?= $product['discountPercent']; ?>">
            <br>

            <label>Mô tả:</label>
            <textarea name="description" rows="10" cols="50"><?= $product['description']; ?></textarea>
            <br>

            <label>&nbsp;</label>
            <input type="submit" value="Cập nhật">

        </form>

    <?php } else {
        $heading_text = 'Thêm sản phẩm'; ?>
        <h1>Quản Lý Sản Phẩm - <?= $heading_text; ?></h1>
        <form action="index.php" method="post" id="add_product_form">

            <input type="hidden" name="action" value="them_sanpham">

            <label>Loại sản phẩm:</label>
            <select name="category_id">
                <?php foreach ($categories as $category) :
                    if ($category['categoryID'] == $product['categoryID']) {
                        $selected = 'selected';
                    } else {
                        $selected = '';
                    }
                ?>
                    <option value="<?= $category['categoryID']; ?>" <?php
                                                                    echo $selected ?>>
                        <?= htmlspecialchars($category['categoryName']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <br>

            <label>Mã sản phẩm:</label>
            <input type="text" name="code" value="">
            <br>

            <label>Tên:</label>
            <input type="text" name="name" value="" size="50">
            <br>

            <label>Bảng giá:</label>
            <input type="text" name="price" value="">
            <br>

            <label>Phần trăm giảm giá:</label>
            <input type="text" name="discount_percent" value="">
            <br>

            <label>Mô tả:</label>
            <textarea name="description" rows="10" cols="50"></textarea>
            <br>

            <label>&nbsp;</label>
            <input type="submit" value="Thêm mới">

        </form>
    <?php } ?>


    <div id="formatting_directions">
        <h2>Làm thế nào để làm việc với description</h2>
        <ul>
            <li>Sử dụng hai dấu trở lại để bắt đầu một đoạn văn mới.</li>
            <li>Sử dụng dấu hoa thị để đánh dấu các mục trong danh sách có dấu đầu dòng.</li>
            <li>Sử dụng một lượt trả về giữa các mục trong danh sách có dấu đầu dòng.</li>
            <li>Sử dụng các thẻ HTML tiêu chuẩn để in đậm và in nghiêng.</li>
        </ul>
    </div>

</main>
<?php include '../../view/footer.php'; ?>