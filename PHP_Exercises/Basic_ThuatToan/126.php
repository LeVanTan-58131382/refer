Viết chương trình PHP để tạo một mảng mới lấy các phần tử sau giá trị phần tử 5 từ một
mảng số nguyên cho trước.
Đầu vào mẫu:
{1, 2, 3, 5, 7, 9, 11}
Đầu ra mẫu:
Mảng mới: 7,9,11

<?php
function test($numbers)
{
    $len = sizeof($numbers);
    $size = 0;
    $i = $len - 1;
    while ($i >= 0 && $numbers[$i] != 5) $i--;
    $i++;

    $size = $len - $i;
    $post_ele_5 = [$size];

    for ($j = 0; $j < $size; $j++) {
        $post_ele_5[$j] = $numbers[$i + $j];
    }

    return $post_ele_5;
}

$result = test([1, 2, 3, 5, 7, 9, 11]);
echo "New array: " . implode(',', $result);
