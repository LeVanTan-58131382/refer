Viết một chương trình PHP để kiểm tra xem hai giá trị số nguyên đã cho có nằm
trong phạm vi 20..50 bao gồm hay không. Trả về true nếu 1 hoặc giá trị khác nằm
trong phạm vi đã nói, ngược lại là false.
Đầu vào mẫu:
20, 84
14, 50
11, 45
25, 40
Đầu ra mẫu:
bool (true)
bool (true)
bool (true)
bool (sai)

<?php
function test($x, $y)
{
    return ($x <= 20 || $y >= 50) || ($y <= 20 || $x >= 50);
}

var_dump(test(20, 84));
var_dump(test(14, 50));
var_dump(test(11, 45));
var_dump(test(25, 40));
