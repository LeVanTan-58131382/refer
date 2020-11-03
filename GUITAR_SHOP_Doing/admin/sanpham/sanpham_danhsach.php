<?php include '../../view/header.php'; ?>
<?php include '../../view/sidebar_admin.php'; ?>
<style>
    .quanly_sanpham {
        position: relative;
        width: 100%;
        height: 1000px;
    }
</style>
<div class="ad-part-content">
    <div class="noidungcon">
        <div class="quanly_sanpham">
            <h1 class="top">Quản Lý Sản Phẩm - Danh Sách Sản Phẩm</h1>
            <p>Để xem, cập nhật hoặc xóa một sản phẩm, click chọn sản phẩm đó</p>
            <p>Để thêm một sản phẩm mới, click vào nút "Thêm mới sản phẩm"</p>
            <?php if (count($products) == 0) : ?>
                <p>Không có sản phẩm nào thuộc loại sản phẩm này</p>
            <?php else : ?>
                <h1>
                    <?= htmlspecialchars($current_category['categoryName']); ?>
                </h1>
                <?php foreach ($products as $product) : ?>
                    <p>
                        <a href="?action=xem_sanpham&amp;product_id=<?php
                                                                    echo $product['productID']; ?>">
                            <?= htmlspecialchars($product['productName']); ?>
                        </a>
                    </p>
                <?php endforeach; ?>
            <?php endif; ?>

            <h1>Links</h1>
            <p><a class="btn btn-primary" href="index.php?action=show_add_edit_form">Thêm mới sản phẩm</a></p>
        </div>
    </div>
</div> <!-- end ad-part-content -->

</div> <!-- end ad-part-right -->

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