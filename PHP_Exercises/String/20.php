Viết tập lệnh PHP để xóa một phần của chuỗi.
Chuỗi gốc: 'The quick brown fox jumps over the lazy dog'
Xóa 'fox' khỏi chuỗi trên.
Kết quả mong đợi: 'The quick brown jumps over the lazy dog'

<?php
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str) . "\n";

?>

Hàm str_replace () thay thế một số ký tự bằng một số ký tự khác trong một chuỗi.