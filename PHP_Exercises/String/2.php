Viết một tập lệnh PHP để tách chuỗi sau.
Chuỗi mẫu: '082307'
Đầu ra mong đợi: 08:23:07

<?php
$str1 = '082307';
echo substr(chunk_split($str1, 2, ':'), 0, -1) . "\n"; // 08:23:07
?>

Hàm substr() ở đây cắt từ 0 đến -1;

Hàm chunk_split () chia một chuỗi thành một loạt các phần nhỏ hơn.
Hàm chunk_split() ở đây cắt từ chuỗi $str1 thành các chuỗi nhỏ gồm 2 ký tự và phân cách nhau bởi đấu ":"