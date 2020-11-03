Viết một chương trình PHP để kiểm tra xem một số không âm đã cho là bội số của 13 hay nó là bội số của 13.
Đầu vào mẫu:
13
14
27
41
Đầu ra mẫu:
bool (true)
bool (true)
bool (true)
bool (sai)

<?php
function test($n)
{
    return $n % 13 == 0 || $n % 13 == 1;
}

var_dump(test(13));
var_dump(test(14));
var_dump(test(27));
var_dump(test(41));
