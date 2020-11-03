Viết chương trình PHP để tạo một mảng mới sau khi thay thế tất cả các giá trị 5 bằng 0,
dịch chuyển tất cả các số không sang đúng hướng.
Đầu vào mẫu:
{1, 2, 0, 3, 5, 7, 0, 9, 11}
Đầu ra mẫu:
Mảng mới: 1,2,3,7,9,11,0,0,0

<?php
function test($numbers)
{
    $size = sizeof($numbers);
    $index = 0;
    $arra1 = array_fill(0, $size, 0);
    for ($i = 0; $i < $size; $i++) {
        if ($numbers[$i] != 5) {
            $arra1[$index] = $numbers[$i];
            $index++;
        }
    }
    return $arra1;
}

$result = test([1, 2, 5, 3, 5, 7, 5, 9, 11]);
echo "New array: " . implode(',', $result);
