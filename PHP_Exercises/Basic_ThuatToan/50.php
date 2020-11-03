Viết một chương trình PHP để kiểm tra ba số nguyên đã cho và trả về true nếu một trong số chúng nhỏ hơn 20
hoặc nhiều hơn một số nguyên khác.
Đầu vào mẫu:
11, 21, 31
11, 22, 31
10, 20, 15
Đầu ra mẫu:
bool (true)
bool (true)
bool (sai)

<?php
function test($x, $y, $z)
{
    return abs($x - $y) >= 20 || abs($x - $z) >= 20 ||
        abs($y - $z) >= 20;
}

var_dump(test(11, 21, 31)) . "\n";
var_dump(test(11, 22, 31)) . "\n";
var_dump(test(10, 20, 15)) . "\n";
