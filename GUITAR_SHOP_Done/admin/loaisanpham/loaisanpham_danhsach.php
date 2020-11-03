<?php include 'view/header.php'; ?>
<?php include 'view/sidebar_admin.php'; ?>
<main>

    <h1>Quản lý loại sản phẩm</h1>
    <table id="category_table">
        <?php foreach ($categories as $category) : ?>
            <tr>
                <form action="." method="post">
                    <td>
                        <input type="text" name="name" value="<?= htmlspecialchars($category['categoryName']); ?>">
                    </td>
                    <td>
                        <input type="hidden" name="action" value="capnhat_loaisanpham">
                        <input type="hidden" name="category_id" value="<?= $category['categoryID']; ?>">
                        <input type="submit" value="Cập nhật">
                    </td>
                </form>
                <td>
                    <?php if ($category['productCount'] == 0) : ?>
                        <form action="." method="post">
                            <input type="hidden" name="action" value="xoa_loaisanpham">
                            <input type="hidden" name="category_id" value="<?= $category['categoryID']; ?>">
                            <input type="submit" value="Xóa">
                        </form>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Thêm loại sản phẩm</h2>
    <form action="." method="post" id="add_category_form">
        <input type="hidden" name="action" value="them_loaisanpham">
        <input type="text" name="name">
        <input type="submit" value="Thêm">
    </form>

</main>
<?php include 'view/footer.php'; ?>