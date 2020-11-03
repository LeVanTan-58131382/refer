Viết chương trình PHP để tính tổng của hai số nguyên đã cho. Nếu một trong các giá trị số nguyên
đã cho nằm trong phạm vi 10..20 bao gồm trả về 18.
Đầu vào mẫu:
3, 7
10, 11
10, 20
21, 220
Đầu ra mẫu:
10
18
18
241

<?php
function test($x, $y)
{
    return ($x >= 10 && $x <= 20) || ($y >= 10 && $y <= 20) ? 18 : $x + $y;
}

echo test(3, 7) . "\n";
echo test(10, 11) . "\n";
echo test(10, 20) . "\n";
echo test(21, 220) . "\n";
