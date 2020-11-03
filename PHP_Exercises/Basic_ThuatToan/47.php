Viết chương trình PHP để kiểm tra xem y có lớn hơn x và z lớn hơn y từ ba số nguyên x, y, z cho
trước hay không.
Đầu vào mẫu:
1, 2, 3
4, 5, 6
-1, 1, 0
Đầu ra mẫu:
bool (true)
bool (true)
bool (sai)

<?php
function test($x, $y, $z)
{
    return $x < $y && $y < $z;
}

var_dump(test(1, 2, 3)) . "\n";
var_dump(test(4, 5, 6)) . "\n";
var_dump(test(-1, 1, 0)) . "\n";
