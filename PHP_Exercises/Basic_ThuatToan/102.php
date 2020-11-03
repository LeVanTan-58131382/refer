Viết chương trình PHP để tạo một mảng mới hoán đổi phần tử đầu tiên và cuối cùng của một mảng số
nguyên đã cho và độ dài sẽ nhỏ nhất là 1.
Đầu vào mẫu:
{1, 5, 7, 9, 11, 13}
Đầu ra mẫu:
Mảng mới, sau khi hoán đổi phần tử đầu tiên và cuối cùng: 13,5,7,9,11,1

<?php
function test($numbers)
{

    $first = $numbers[0];
    $numbers[0] = $numbers[sizeof($numbers) - 1];
    $numbers[sizeof($numbers) - 1] = $first;
    return $numbers;
}

$result = test([1, 5, 7, 9, 11, 13]);
echo "New array, after swapping first and last elements: " . implode(',', $result);
