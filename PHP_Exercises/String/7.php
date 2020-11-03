Viết một tập lệnh PHP để lấy ba ký tự cuối cùng của một chuỗi.
Chuỗi mẫu: 'rayy@example.com'
Đầu ra mong đợi: 'com'

<?php
$str1 = 'rayy@example.com';
echo substr($str1, -3) . "\n"; // com
?>