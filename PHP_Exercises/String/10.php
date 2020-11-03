Viết một tập lệnh PHP để thay thế 'the' đầu tiên của chuỗi sau bằng 'That'.
Ngày mẫu: 'the quick brown fox jumps over the lazy dog.'
Kết quả mong đợi: That quick brown fox jumps over the lazy dog.

<?php
$str = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str, 1) . "\n";
?>

Hàm preg_replace () trả về một chuỗi hoặc mảng các chuỗi trong đó tất cả các kết quả khớp của một mẫu
hoặc danh sách các mẫu được tìm thấy trong đầu vào được thay thế bằng các chuỗi con.

Cú pháp: preg_replace(patterns, replacements, input, limit, count)