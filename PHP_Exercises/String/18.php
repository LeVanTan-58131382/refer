Viết một tập lệnh PHP để lấy từ đầu tiên của câu. Đi tới trình chỉnh sửa
Chuỗi gốc: 'The quick brown fox'
Đầu ra mong đợi: 'The'

<?php
$s = 'The quick brown fox';
$arr1 = explode(' ', trim($s));
echo $arr1[0] . "\n";
?>


Hàm trim () loại bỏ khoảng trắng và các ký tự được xác định trước khác từ cả hai phía của chuỗi.

Các chức năng liên quan:

ltrim () - Loại bỏ khoảng trắng hoặc các ký tự được xác định trước khác từ phía bên trái của một chuỗi
rtrim () - Loại bỏ khoảng trắng hoặc các ký tự được xác định trước khác từ phía bên phải của một chuỗi

VD: Xóa khoảng trắng khỏi cả hai bên của một chuỗi:

$str = " Hello World! ";
echo "Without trim: " . $str;
echo "<br>";
echo "With trim: " . trim($str);