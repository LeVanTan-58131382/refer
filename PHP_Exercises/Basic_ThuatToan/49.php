Viết một chương trình PHP để kiểm tra xem hai hoặc nhiều số nguyên cho trước không âm có
cùng chữ số tận cùng bên phải hay không.
Đầu vào mẫu:
11, 21, 31
11, 22, 31
11, 22, 33
Đầu ra mẫu:
bool (true)
bool (true)
bool (sai)

<?php
function test($x, $y, $z)
{
    return $x % 10 == $y % 10 || $x % 10 == $z % 10 || $y % 10 == $z % 10;
}

var_dump(test(11, 21, 31)) . "\n";
var_dump(test(11, 22, 31)) . "\n";
var_dump(test(11, 22, 33)) . "\n";
