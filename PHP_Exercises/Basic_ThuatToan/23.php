Viết một chương trình PHP để kiểm tra xem hai số nguyên không âm đã cho có cùng chữ số cuối cùng hay không.
Đầu vào mẫu:
123, 456
12, 512
7, 87
12, 45
Đầu ra mẫu:
bool (sai)
bool (true)
bool (true)
bool (sai)

<?php
function test($x, $y)
{
    return abs($x % 10) == abs($y % 10);
}

var_dump(test(123, 456));
var_dump(test(12, 512));
var_dump(test(7, 87));
var_dump(test(12, 45));
