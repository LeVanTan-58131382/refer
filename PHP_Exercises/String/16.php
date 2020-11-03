Viết một tập lệnh PHP để lấy một kết xuất hex của một chuỗi.
Chuỗi mẫu: 'rayy@example.com'

<?php
$str = 'rayy@example.com';
echo bin2hex($str) . "\n";
?>