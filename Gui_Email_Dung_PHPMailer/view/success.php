<?php include 'header.php'; ?>
<main>
    <h2>Thành công</h2>
    <p>Chúc mừng bạn đã Đăng ký tài khoản thành công.</p>
    <ul>
        <li>First Name: <?php echo htmlspecialchars($first_name); ?></li>
        <li>Last Name: <?php echo htmlspecialchars($last_name); ?></li>
        <li>Số điện thoại: <?php echo htmlspecialchars($phone); ?></li>
        <li>Email: <?php echo htmlspecialchars($email); ?></li>
    </ul>
</main>
<?php include 'footer.php'; ?>