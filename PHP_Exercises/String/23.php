Viết một tập lệnh PHP để thay thế nhiều ký tự từ chuỗi sau.
Chuỗi mẫu: '\ "\ 1 + 2/3 * 2: 2-3 / 4 * 3'
Đầu ra mong đợi: '1 2 3 2 2 3 4 3'

<?php
$my_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str) . "\n";
?>

Hàm str_split () chia một chuỗi thành một mảng.
str_split(string,length) // length mặc định là 1 (Chỉ định độ dài của mỗi phần tử mảng)