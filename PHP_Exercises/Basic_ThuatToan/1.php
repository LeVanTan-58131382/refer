Viết chương trình PHP để tính tổng của hai giá trị số nguyên đã cho.
Nếu hai giá trị giống nhau, thì trả về gấp ba tổng của chúng.
Đầu vào mẫu
1, 2
3, 2
2, 2
Đầu ra mẫu:
3
5
12

<?php
function test($x, $y)
{
    return $x == $y ? ($x + $y) * 3 : $x + $y;
}
echo test(1, 2) . "\n";
echo test(3, 2) . "\n";
echo test(2, 2) . "\n";
