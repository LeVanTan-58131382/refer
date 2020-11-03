Viết một chương trình PHP để tìm số lớn hơn từ hai số nguyên đã cho. Tuy nhiên,
nếu hai số nguyên có cùng phần dư khi chia cho 7, thì trả về số nguyên nhỏ hơn.
Nếu hai số nguyên giống nhau, trả về 0.
Đầu vào mẫu:
11, 21
11, 20
10, 10
Đầu ra mẫu:
21
20
0

<?php
function test($x, $y)
{
    if ($x == $y) {
        return 0;
    } else if (($x % 7 == $y % 7 && $x < $y) || $x > $y) {
        return $x;
    } else {
        return $y;
    }
}

echo test(11, 21) . "\n";
echo test(11, 20) . "\n";
echo test(10, 10) . "\n";
