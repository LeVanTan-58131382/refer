Viết một tập lệnh PHP để xóa tất cả các số 0 đứng đầu khỏi một chuỗi.
Chuỗi gốc: '000547023.24'
Đầu ra mong đợi: '547023,24'

<?php
$x = '000547023.24';
$str1 = ltrim($x, '0');
echo $str1 . "\n";
?>

Hàm ltrim () loại bỏ khoảng trắng hoặc các ký tự được xác định trước khác từ phía bên trái của một chuỗi.
Ở đây ngoài loại bỏ khoảng trắng bên trái thì còn loại bỏ đi số 0