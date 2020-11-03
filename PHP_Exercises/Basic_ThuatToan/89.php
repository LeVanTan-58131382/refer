Viết chương trình PHP để tính tổng các phần tử của một mảng số nguyên cho trước.
Đầu vào mẫu:
{10, 20, 30, 40, 50}
{10, 20, -30, -40, 50}
Đầu ra mẫu:
150
10

<?php
function test($a1)
{
    return $a1[0] + $a1[1] + $a1[2] + $a1[3] + $a1[4];
}

echo test([10, 20, 30, 40, 50]) . "\n";
echo test([10, 20, -30, -40, 50]) . "\n";
