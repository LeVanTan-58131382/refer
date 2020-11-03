Viết một chương trình PHP để kiểm tra xem ba giá trị số nguyên đã cho có nằm
trong phạm vi 20..50 bao gồm hay không. Trả về true nếu 1 hoặc nhiều trong số
chúng nằm trong phạm vi đã nói, ngược lại là false.
Đầu vào mẫu:
11, 20, 12
30, 30, 17
25, 35, 50
15, 12, 8
Đầu ra mẫu:
bool (true)
bool (true)
bool (true)
bool (sai)

<?php
function test($x, $y, $z)
{
    return ($x >= 20 && $x <= 50) || ($y >= 20 && $y <= 50) || ($z >= 20 && $z <= 50);
}

var_dump(test(11, 20, 12));
var_dump(test(30, 30, 17));
var_dump(test(25, 35, 50));
var_dump(test(15, 12, 8));
