<?php include 'view/header.php'; ?>
<?php include 'view/sidebar_admin.php'; ?>
<div class="ad-part-content">
    <div class="noidungcon">

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
<?php include 'view/footer.php'; ?>