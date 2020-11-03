$ color = array (4 => 'white', 6 => "green", 11 => "red");
Viết một đoạn mã PHP để lấy phần tử đầu tiên của mảng trên.
Kết quả mong đợi: màu trắng

<?php
$color = array(4 => 'white', 6 => 'green', 11 => 'red');
echo reset($color) . "\n";
?>