Viết chương trình PHP để kiểm tra số lớn nhất trong ba số nguyên đã cho.
Đầu vào mẫu:
1,2,3
1,3,2
1,1,1
1,2,2
Đầu ra mẫu:
3
3
1
2

<?php
function test($x, $y, $z)
{
    $max = max($x, max($y, $z));
    return $max;
}

echo test(1, 2, 3) . "\n";
echo test(1, 3, 2) . "\n";
echo test(1, 1, 1) . "\n";
echo test(1, 2, 2) . "\n";
