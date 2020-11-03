Viết một chương trình PHP chấp nhận hai số nguyên và trả về true nếu một trong hai số nguyên là 5
hoặc tổng hoặc hiệu của chúng là 5.
Đầu vào mẫu:
5, 4
4, 3
1, 4
Đầu ra mẫu:
bool (true)
bool (sai)
bool (true)

<?php
function test($x, $y)
{
    return $x == 5 || $y == 5 || $x + $y == 5 || abs($x - $y) == 5;
}

var_dump(test(5, 4));
var_dump(test(4, 3));
var_dump(test(1, 4));
