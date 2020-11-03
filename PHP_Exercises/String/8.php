Viết một tập lệnh PHP để định dạng các giá trị theo kiểu tiền tệ.
Giá trị mẫu: value1 = 65.45, value2 = 104.35
Kết quả mong đợi: 169.80

<?php
$value1 = 65.45;
$value2 = 104.35;
echo sprintf($value1 + $value2) . "\n"; // 169.8
echo sprintf("%1.2f", $value1 + $value2) . "\n"; // 169.80
?>