Viết chương trình PHP để tìm giá trị lớn nhất từ ​​các phần tử đầu tiên, cuối cùng và giữa của một mảng
các số nguyên có độ dài lẻ cho trước (nhỏ nhất là 1).
Đầu vào mẫu:
{1}
{1,2,9}
{1,2,9,3,3}
{1,2,3,4,5,6,7}
{1,2,2,3,7,8,9,10,6,5,4}
Đầu ra mẫu:
1
9
9
7
8

<?php
function test($numbers)
{

    $first = $numbers[0];
    $middle_ele = $numbers[sizeof($numbers) / 2];
    $last_ele = $numbers[sizeof($numbers) - 1];
    $max_ele = $first;

    if ($middle_ele > $max_ele) {
        $max_ele = $middle_ele;
    }

    if ($last_ele > $max_ele) {
        $max_ele = $last_ele;
    }

    return $max_ele;;
}

echo test([1]) . "\n";
echo test([1, 2, 9]) . "\n";
echo test([1, 2, 9, 3, 3]) . "\n";
echo test([1, 2, 3, 4, 5, 6, 7]) . "\n";
echo test([1, 2, 2, 3, 7, 8, 9, 10, 6, 5, 4]) . "\n";
