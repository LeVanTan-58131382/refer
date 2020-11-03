Viết chương trình PHP để tính tổng của hai số nguyên không âm x và y đã cho, miễn là tổng
có cùng số chữ số với x. Nếu tổng có nhiều chữ số hơn x thì trả về x mà không có y.
Đầu vào mẫu:
4, 5
7, 4
10, 10
Đầu ra mẫu:
9
7
20

<?php
function test($x, $y)
{
    return strlen((string)($x + $y)) > strlen((string)$x) ? $x : $x + $y;
}

echo (test(4, 5)) . "\n";
echo (test(7, 4)) . "\n";
echo (test(10, 10)) . "\n";
