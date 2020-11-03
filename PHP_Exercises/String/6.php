Viết tập lệnh PHP để trích xuất tên người dùng từ ID email sau.
Chuỗi mẫu: 'rayy@example.com'
Đầu ra mong đợi: 'rayy'

<?php
$mailid  = 'rayy@example.com';
$user = strstr($mailid, '@', true);
echo $user . "\n"; // rayy
?>

Hàm strstr () tìm kiếm lần xuất hiện đầu tiên của một chuỗi bên trong một chuỗi khác