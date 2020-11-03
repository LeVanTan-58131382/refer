Viết một tập lệnh PHP để xóa dấu gạch chéo khỏi một chuỗi. Đi tới trình chỉnh sửa
Chuỗi gốc: 'The quick brown fox jumps over the lazy dog///'
Kết quả mong đợi: 'The quick brown fox jumps over the lazy dog'

<?php
$my_str = 'The quick brown fox jumps over the lazy dog///';
echo rtrim($my_str, '/') . "\n";
?>

Hàm rtrim () loại bỏ khoảng trắng hoặc các ký tự được xác định trước khác từ phía bên phải của một chuỗi.