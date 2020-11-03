Viết một tập lệnh PHP để trích xuất tên tệp từ chuỗi sau.
Chuỗi mẫu: 'www.example.com/public_html/index.php'
Đầu ra mong đợi: 'index.php'

<?php
$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name . "\n"; // "index.php"

?>

Hàm strrchr(): tìm vị trí xuất hiện cuối cùng
của một chuỗi trong một chuỗi khác và trả về tất cả các ký tự từ vị trí này đến cuối chuỗi

Giải thích:
strrchr($path, "/"); trả về chuỗi "/index.php";
Hàm substr() trả về chuỗi trên bắt đầu tính từ vị trí thứ 1 trỡ về sau