<?php include 'view/header.php'; ?>
<?php include 'view/sidebar_admin.php'; ?>
<main class="nofloat">
    <h1>Xóa tài khoản</h1>
    <p>Bạn có chắc muốn xóa tài khoản này của
        <?= htmlspecialchars($last_name) . ', ' .
            htmlspecialchars($first_name) .
            ' (' . htmlspecialchars($email) . ')'; ?>?</p>
    <form action="." method="post">
        <input type="hidden" name="action" value="xoa">
        <input type="hidden" name="admin_id" value="<?= $admin_id; ?>">
        <input type="submit" value="Xóa">
    </form>
    <form action="." method="post">
        <input type="submit" value="Đóng">
    </form>
</main>
<?php include 'view/footer.php'; ?>