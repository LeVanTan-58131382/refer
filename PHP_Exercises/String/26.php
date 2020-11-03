Viết một tập lệnh PHP để in các ký tự từ 'a' đến 'z'. Đi tới trình chỉnh sửa
Kết quả mong đợi: abcdefghijklmnopqrstuvwxyz

<?php
for ($x = ord('a'); $x <= ord('z'); $x++)
    echo chr($x);
echo "\n"
?>

Hàm ord () trả về giá trị ASCII của ký tự đầu tiên của chuỗi