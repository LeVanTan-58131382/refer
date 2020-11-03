<?php
$str =  bin2hex("Hello World Hello The Earth"); // Chuyển đổi chuỗi thành giá trị thập lục phân (hex)
echo $str; // 48656c6c6f20576f726c642048656c6c6f20546865204561727468

echo hex2bin($str); // Chuyển đổi các giá trị thập lục phân thành các ký tự ASCII // Hello World Hello The Earth 



$str_2 = chr(65);
echo $str_2; // A

$str_2 = chr(66);
echo $str_2; // B

$str_2 = chr(97);
echo $str_2; // a

$str_2 = chr(0120);
echo $str_2; // P

$str_2 = chr(0x48);
echo $str_2; // H

$str_2 = ord("A");
echo $str_2; // 65

$str_2 = ord("G");
echo $str_2; // 71

$str_2 = ord("Apple");
echo $str_2; // 65 // nó chỉ nhận chữ đầu tiên là chữ a thôi



echo "<br>";
// Gói một chuỗi thành các dòng mới khi nó đạt đến độ dài cụ thể
$str_3 = "This is my world";
echo wordwrap($str_3, 5, "<br>"); // cắt ra mỗi hàng 4 chữ (kể cả khoảng trắng)
// This
// is my
// world


// Min max

$val = min(array(12, 45, 3, 41, 90, 112));
echo $val; // 3

$val_2 = min(array(12, 45, 3), array(12, 30, 9));
echo "<pre>";
print_r($val_2);
echo "</pre>";
// Array
// (
//     [0] => 12
//     [1] => 30
//     [2] => 9
// )
// giải thích, bỏ qua giá trị đầu là 12 của mỗi array, giá trị tiếp theo 30 nhỏ hơn 45

$val_3 = max(array(12, 45, 3), array(12, 30, 9));
echo "<pre>";
print_r($val_2);
echo "</pre>";
//Array
// (
//     [0] => 12
//     [1] => 45
//     [2] => 3
// )

$val_4 = max(TRUE, FALSE);
echo $val_4; // 1
