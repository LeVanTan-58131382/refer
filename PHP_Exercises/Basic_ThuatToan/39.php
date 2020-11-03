Viết chương trình PHP để tính tổng của hai số nguyên đã cho. Nếu tổng nằm trong phạm vi 10..20 bao gồm trả về 30.
Đầu vào mẫu:
12, 17
2, 17
22, 17
20, 0
Đầu ra mẫu:
29
30
39
30

<?php
function test($a, $b)
{
    return $a + $b >= 10 && $a + $b <= 20 ? 30 : $a + $b;
}

echo test(12, 17) . "\n";
echo test(2, 17) . "\n";
echo test(22, 17) . "\n";
echo test(20, 0) . "\n";
