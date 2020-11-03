Viết một chương trình PHP để tính tổng của ba số nguyên. Nếu một trong các giá trị là 13 thì
không tính giá trị đó và quyền của nó đối với tổng.
Đầu vào mẫu:
4, 5, 7
7, 4, 12
10, 13, 12
13, 12, 18
Đầu ra mẫu:
16
23
10
0

<?php
function test($x, $y, $z)
{
    if ($x == 13) return 0;
    if ($y == 13) return $x;
    if ($z == 13) return $x + $y;
    return $x + $y + $z;
}

echo (test(4, 5, 7)) . "\n";
echo (test(7, 4, 12)) . "\n";
echo (test(10, 13, 12)) . "\n";
echo (test(13, 12, 18)) . "\n";
