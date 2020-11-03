Viết chương trình PHP để kiểm tra xem một số đã cho có nằm trong 2 bội số của 10.
Đầu vào mẫu:
3
7
số 8
21
Đầu ra mẫu:
bool (sai)
bool (sai)
bool (true)
bool (true)

<?php
function test($n)
{
    return $n % 10 <= 2 || $n % 10 >= 8;
}

var_dump(test(3));
var_dump(test(7));
var_dump(test(8));
var_dump(test(21));
