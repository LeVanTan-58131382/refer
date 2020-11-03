Viết một tập lệnh PHP để lấy các ký tự sau '/' cuối cùng trong một url.
URL mẫu: 'http://www.example.com/5478631'
Đầu ra mong đợi: '5478631'

<?php
$my_url = 'http://www.example.com/5478631';
echo substr($my_url, strrpos($my_url, '/') + 1) . "\n";
?>

Hàm strrpos () tìm vị trí của lần xuất hiện cuối cùng của một chuỗi bên trong một chuỗi khác.