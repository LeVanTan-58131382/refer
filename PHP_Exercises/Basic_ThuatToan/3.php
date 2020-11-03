3. Viết một chương trình PHP để kiểm tra hai số nguyên đã cho và trả về true
nếu một trong số chúng là 30 hoặc nếu tổng của chúng là 30.
Đầu vào mẫu:
30, 0
25, 5
20, 30
20, 25
Đầu ra mẫu:
bool (true)
bool (true)
bool (true)
bool (sai)

<?php
function test($x, $y)
{
    return ($x == 30) || ($y == 30) || ($x + $y == 30);
}

var_dump(test(30, 0));
var_dump(test(25, 5));
var_dump(test(20, 30));
var_dump(test(20, 25));
