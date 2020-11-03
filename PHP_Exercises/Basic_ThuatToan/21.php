Viết chương trình PHP để tìm giá trị lớn hơn từ hai giá trị nguyên dương nằm trong phạm vi 20..30
bao gồm hoặc trả về 0 nếu không có giá trị nào trong phạm vi đó.
Đầu vào mẫu:
78, 95
20, 30
21, 25
28, 28
Đầu ra mẫu:
0
30
25
28

<?php
function test($x, $y)
{
    if ($x >= 20 && $x <= 30 && $y >= 20 && $y <= 30) {
        if ($x >= $y) {
            return $x;
        } else {
            return $y;
        }
    } else if ($x >= 20 && $y <= 30) {
        return $x;
    } else if ($y >= 20 && $y <= 30) {
        return $y;
    } else {
        return 0;
    }
}

echo test(78, 95) . "\n";
echo test(20, 30) . "\n";
echo test(21, 25) . "\n";
echo test(28, 28) . "\n";
