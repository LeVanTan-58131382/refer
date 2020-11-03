Viết một tập lệnh PHP để chọn 5 từ đầu tiên từ chuỗi sau. Đi tới trình chỉnh sửa
Chuỗi mẫu: 'The quick brown fox jumps over the lazy dog'
Đầu ra mong đợi: 'The quick brown fox jumps'

<?php
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5)) . "\n";
?>

Hàm array_slice () trả về các phần đã chọn của một mảng.
array_slice(array, start, length, preserve)