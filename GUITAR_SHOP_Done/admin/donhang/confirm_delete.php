<?php include 'view/header.php'; ?>
<?php include 'view/sidebar_admin.php'; ?>
<main>
    <h2>Xóa đơn hàng</h2>
    <p>Mã số đơn hàng: <?= $order_id; ?></p>
    <p>Ngày đặt hàng: <?= $order_date; ?></p>
    <p>Khách hàng: <?= htmlspecialchars($customer_name) . ' (' .
                        htmlspecialchars($email) . ')'; ?></p>
    <p>Bạn có chắc muốn xóa đơn hàng này?</p>
    <form action="." method="post">
        <input type="hidden" name="action" value="xoa">
        <input type="hidden" name="order_id" value="<?= $order_id; ?>">
        <input type="submit" value="Delete Order">
    </form>
    <form action="." method="post">
        <input type="submit" value="Cancel">
    </form>
</main>
<?php include 'view/footer.php'; ?>