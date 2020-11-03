Viết một chương trình PHP để kiểm tra hai số nguyên đã cho liệu một trong hai số đó
có nằm trong phạm vi 100..200 bao gồm không.
Đầu vào mẫu:
100, 199
250, 300
105, 190
Đầu ra mẫu:
bool (true)
bool (sai)
bool (true)

<?php
function test($x, $y)
{
    return ($x >= 100 && $x <= 200) || ($y >= 100 && $y <= 200);
}

var_dump(test(100, 199));
var_dump(test(250, 300));
var_dump(test(105, 190));
