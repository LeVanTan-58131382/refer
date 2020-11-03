<?php
require_once('util/main.php');
require_once('model/product_db.php');

// Đặt các ID sản phẩm nổi bật trong một mảng
$product_ids = array(2, 7, 9);
// Note: Bạn cũng có thể lưu trữ danh sách các sản phẩm nổi bật trong cơ sở dữ liệu

// Nhận một loạt các sản phẩm nổi bật từ cơ sở dữ liệu
$products = array();
foreach ($product_ids as $product_id) {
    $product = get_product($product_id);
    $products[] = $product;   // add product to array
}

// Hiển thị trang home page
include('home_view.php');
