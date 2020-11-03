Viết một chương trình PHP để xoay các phần tử của một mảng số nguyên đã cho (độ dài 4)
theo hướng trái và trả về mảng mới.
Đầu vào mẫu:
{10, 20, -30, -40}
Đầu ra mẫu:
Mảng đã xoay: 20, -30, -40,10

<?php
function test($a1)
{
    return [$a1[1], $a1[2], $a1[3], $a1[0]];
}

$a = [10, 20, -30, -40];

echo "Original array: " . implode(',', $a) . "\n";

$result = test($a);

echo "Rotated array: " . implode(',', $result);
