Viết chương trình PHP để kiểm tra xem một số dương đã cho là bội của 3 hay bội của 7.
Đầu vào mẫu
3
14
12
37
Đầu ra mẫu:
bool (true)
bool (true)
bool (true)
bool (sai)

<?php
function test($n)
{
    return $n % 3 == 0 || $n % 7 == 0;
}

var_dump(test(3));
var_dump(test(14));
var_dump(test(12));
var_dump(test(37));
