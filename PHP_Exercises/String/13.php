Viết một tập lệnh PHP để lấy thành phần tên tệp của đường dẫn sau.
Đường dẫn mẫu: "https://www.w3resource.com/index.php"
Đầu ra mong đợi: 'index'

<?php
$path = 'www.example.com/public_html/index.php';
$file = basename($path, ".php");
echo $file . "\n";
?>

Hàm basename () trả về tên tệp từ một đường dẫn.