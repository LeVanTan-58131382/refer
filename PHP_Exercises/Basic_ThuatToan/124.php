Viết chương trình PHP để dịch chuyển một phần tử theo hướng trái và trả về một mảng mới.
Đầu vào mẫu:
{10, 20, -30, -40, 50}
Đầu ra mẫu:
Mảng mới: 20, -30, -40,50,10

<?php
function test($numbers)
{
    $size = sizeof($numbers);
    $shiftNums = [$size];

    for ($i = 0; $i < $size; $i++) {
        $shiftNums[$i] = $numbers[($i + 1) % $size];
    }
    return $shiftNums;
}

$result = test([10, 20, -30, -40, 50]);
echo "New array: " . implode(',', $result);
