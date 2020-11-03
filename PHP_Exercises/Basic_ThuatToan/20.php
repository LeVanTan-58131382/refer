Viết một chương trình PHP để kiểm tra xem hai số nguyên đã cho có nằm trong phạm vi 40..50
bao gồm hay cả hai đều nằm trong phạm vi 50..60.
Đầu vào mẫu:
78, 95
25, 35
40, 50
55, 60
Đầu ra mẫu:
bool (sai)
bool (sai)
bool (true)
bool (true)

<?php
function test($x, $y)
{
    return ($x >= 40 && $x <= 50 && $y >= 40 && $y <= 50) || ($x >= 50 && $x <= 60 && $y >= 50 && $y <= 60);
}

var_dump(test(78, 95));
var_dump(test(25, 35));
var_dump(test(40, 50));
var_dump(test(55, 60));
