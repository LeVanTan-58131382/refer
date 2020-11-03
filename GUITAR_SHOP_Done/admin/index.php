<?php
require_once('../util/main.php');
require_once('../util/secure_conn.php');
require_once('../util/valid_admin.php');
include 'view/header.php';
include 'view/sidebar_admin.php';
?>

<main>
    <h1>Admin Menu</h1>
    <p><a href="sanpham">Quản lý sản phẩm</a></p>
    <p><a href="loaisanpham">Quản lý loại sản phẩm</a></p>
    <p><a href="donhang">Quản lý đơn hàng</a></p>
    <p><a href="taikhoan">Quản lý tài khoản</a></p>
</main>

<?php include 'view/footer.php'; ?>