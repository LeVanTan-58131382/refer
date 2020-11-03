<?php include 'view/header.php'; ?>
<?php include 'view/sidebar_admin.php'; ?>
<main>
    <h1>Cập nhật Tài khoản</h1>
    <div id="edit_account_form">
        <form action="." method="post">
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="admin_id" value="<?= $admin_id; ?>">
            <label>E-Mail:</label>
            <input type="text" name="email" value="<?= htmlspecialchars($email); ?>">
            <?= $fields->getField('email')->getHTML(); ?><br>

            <label>First Name:</label>
            <input type="text" name="first_name" value="<?= htmlspecialchars($first_name); ?>">
            <?= $fields->getField('first_name')->getHTML(); ?><br>

            <label>Last Name:</label>
            <input type="text" name="last_name" value="<?= htmlspecialchars($last_name); ?>">
            <?= $fields->getField('last_name')->getHTML(); ?><br>

            <label>Mật khẩu mới:</label>
            <input type="password" name="password_1">
            <span>Leave blank to leave unchanged</span>
            <?= $fields->getField('password_1')->getHTML(); ?><br>

            <label>Nhập lại mật khẩu:</label>
            <input type="password" name="password_2">
            <?= $fields->getField('password_2')->getHTML(); ?><br>

            <label>&nbsp;</label>
            <input type="submit" value="Update Account">
            <span class="error">
                <?= htmlspecialchars($password_message); ?>
            </span><br>
        </form>
        <form action="." method="post">
            <label>&nbsp;</label>
            <input type="submit" value="Cancel">
        </form>
    </div>
</main>
<?php include 'view/footer.php'; ?>