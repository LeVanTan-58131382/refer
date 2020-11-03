Viết chương trình PHP để kiểm tra xem có thể cộng hai số nguyên để lấy số nguyên thứ ba
từ ba số nguyên đã cho hay không.
Đầu vào mẫu:
1, 2, 3
4, 5, 6
-1, 1, 0
Đầu ra mẫu:
bool (true)
bool (sai)
bool (true)

<?php
function test($x, $y, $z)
{
    return $x == $y + $z || $y == $x + $z || $z == $x + $y;
}

var_dump(test(1, 2, 3)) . "\n";
var_dump(test(4, 5, 6)) . "\n";
var_dump(test(-1, 1, 0)) . "\n";
