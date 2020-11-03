Viết một chương trình PHP để kiểm tra xem ba số nhất định có theo thứ tự tăng dần, chẳng hạn như 4 7 15,
hoặc 45, 56, 67, nhưng không phải là 4, 5, 8 hoặc 6, 6, 8. Tuy nhiên, nếu tham số thứ tư là true,
bình đẳng được cho phép, chẳng hạn như 6, 6, 8 hoặc 7, 7, 7.
Đầu vào mẫu:
1, 2, 3, sai
1, 2, 3, đúng
10, 2, 30, sai
10, 10, 30, đúng
Đầu ra mẫu:
bool (true)
bool (true)
bool (sai)
bool (true)

<?php
function test($x, $y, $z, $flag)
{
    return $flag ? $x <= $y && $y <= $z : $x < $y && $y < $z;
}

var_dump(test(1, 2, 3, false)) . "\n";
var_dump(test(1, 2, 3, true)) . "\n";
var_dump(test(10, 2, 30, false)) . "\n";
var_dump(test(10, 10, 30, true)) . "\n";
