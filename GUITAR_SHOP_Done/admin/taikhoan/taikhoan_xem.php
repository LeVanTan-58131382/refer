<?php include 'view/header.php'; ?>
<?php include 'view/sidebar_admin.php'; ?>
<main>
    <h1>Tài khoản quản trị viên</h1>
    <?php if (isset($_SESSION['admin'])) : ?>
        <h2>Tài khoản của tôi</h2>
        <p><?= $_SESSION['admin']['firstName'] . ' ' .
                $_SESSION['admin']['lastName'] .
                ' (' . $_SESSION['admin']['emailAddress'] . ')'; ?></p>
        <form action="." method="post">
            <input type="hidden" name="action" value="view_edit">
            <input type="hidden" name="admin_id" value="<?= $_SESSION['admin']['adminID']; ?>">
            <input type="submit" value="Edit">
        </form>
    <?php endif; ?>
    <?php if (count($admins) > 1) : ?>
        <h2>Quản trị viên khác</h2>
        <table>
            <?php foreach ($admins as $admin) :
                if ($admin['adminID'] != $_SESSION['admin']['adminID']) : ?>
                    <tr>
                        <td><?= $admin['lastName'] . ', ' .
                                $admin['firstName']; ?>
                        </td>
                        <td>
                            <form action="." method="post" class="inline">
                                <input type="hidden" name="action" value="view_edit">
                                <input type="hidden" name="admin_id" value="<?= $admin['adminID']; ?>">
                                <input type="submit" value="Cập nhật">
                            </form>
                            <form action="." method="post" class="inline">
                                <input type="hidden" name="action" value="view_delete_confirm">
                                <input type="hidden" name="admin_id" value="<?= $admin['adminID']; ?>">
                                <input type="submit" value="Xóa">
                            </form>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    <h2>Thêm một quản trị viên</h2>
    <form action="." method="post" id="add_admin_user_form">
        <input type="hidden" name="action" value="them">
        <label>E-Mail:</label>
        <input type="text" name="email" value="<?= htmlspecialchars($email); ?>" placeholder="Nhập email...">
        <span class="error"><?= $email_message; ?></span>
        <?= $fields->getField('email')->getHTML(); ?><br>

        <label>First Name:</label>
        <input type="text" name="first_name" value="<?= htmlspecialchars($first_name); ?>">
        <?= $fields->getField('first_name')->getHTML(); ?><br>

        <label>Last Name:</label>
        <input type="text" name="last_name" value="<?= htmlspecialchars($last_name); ?>">
        <?= $fields->getField('last_name')->getHTML(); ?><br>

        <label>Mật khẩu:</label>
        <input type="password" name="password_1" placeholder="Nhập mật khẩu...">
        <span><?= htmlspecialchars($password_message); ?></span>
        <?= $fields->getField('password_1')->getHTML(); ?><br>

        <label>Nhập lại mật khẩu:</label>
        <input type="password" name="password_2" placeholder="Nhập lại mật khẩu...">
        <?= $fields->getField('password_2')->getHTML(); ?><br>

        <label>&nbsp;</label>
        <input type="submit" value="Thêm QTV">
    </form>
</main>
<?php include 'view/footer.php'; ?>