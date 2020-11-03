Viết chương trình PHP để tính tổng của ba số nguyên đã cho. Nếu hai giá trị giống nhau trả về
giá trị thứ ba.
Đầu vào mẫu:
4, 5, 7
7, 4, 12
10, 10, 12
12, 12, 18
Đầu ra mẫu:
16
23
12
18

<?php
function test($x, $y, $z)
{
    if ($x == $y && $y == $z) return 0;
    if ($x == $y) return $z;
    if ($x == $z) return $y;
    if ($y == $z) return $x;
    return $x + $y + $z;
}
echo (test(4, 5, 7)) . "\n";
echo (test(7, 4, 12)) . "\n";
echo (test(10, 10, 12)) . "\n";
echo (test(12, 12, 18)) . "\n";
