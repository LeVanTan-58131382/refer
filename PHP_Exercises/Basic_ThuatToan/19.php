Viết chương trình PHP để kiểm tra xem số nào gần giá trị 100 nhất trong hai số nguyên đã cho.
Trả về 0 nếu hai số bằng nhau.
Đầu vào mẫu:
78, 95
95, 95
99, 70
Đầu ra mẫu:
95
0
99

<?php
function test($x, $y)
{
    $n = 100;
    $val = abs($x - $n);
    $val2 = abs($y - $n);
    return $val == $val2 ? 0 : ($val < $val2 ? $x : $y);
}

echo test(78, 95) . "\n";
echo test(95, 95) . "\n";
echo test(99, 70) . "\n";
