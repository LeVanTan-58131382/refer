Viết một chương trình PHP để kiểm tra hai số nguyên đã cho và trả về giá trị cho giá trị
nào gần nhất với 13 mà không cần vượt qua. Trả về 0 nếu cả hai số đều vượt qua.
Đầu vào mẫu:
4, 5
7, 12
10, 13
17, 33
Đầu ra mẫu:
5
12
13
0

<?php
function test($x, $y)
{
    if ($x > 13 && $y > 13) return 0;
    if ($x <= 13 && $y > 13) return x;
    if ($y <= 13 && $x > 13) return y;
    return $x > $y ? $x : $y;
}

echo (test(4, 5)) . "\n";
echo (test(7, 12)) . "\n";
echo (test(10, 13)) . "\n";
echo (test(17, 33)) . "\n";
