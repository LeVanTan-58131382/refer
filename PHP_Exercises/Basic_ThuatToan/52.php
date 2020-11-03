Viết một chương trình PHP để kiểm tra hai số nguyên đã cho, mỗi số trong phạm vi 10..99.
Trả về true nếu một chữ số xuất hiện trong cả hai số, chẳng hạn như 3 trong 13 và 33.
Đầu vào mẫu:
11, 21
11, 20
10, 10
Đầu ra mẫu:
bool (true)
bool (sai)
bool (true)

<?php
function test($x, $y)
{
    return $x / 10 == $y / 10 || $x / 10 == $y % 10 || $x % 10 == $y / 10 || $x % 10 == $y % 10;
}

var_dump(test(11, 21)) . "\n";
var_dump(test(11, 20)) . "\n";
var_dump(test(10, 10)) . "\n";
