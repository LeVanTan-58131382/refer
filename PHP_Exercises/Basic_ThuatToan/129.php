Viết chương trình PHP để tạo mảng mới từ một mảng số nguyên đã cho,
dịch chuyển tất cả các số chẵn trước tất cả các số lẻ.
Đầu vào mẫu:
{1, 2, 5, 3, 5, 4, 6, 9, 11}
Đầu ra mẫu:
Mảng mới: 2,4,6,3,5,1,5,9,11

<?php
function test($numbers)
{
    $index = 0;
    for ($i = 0; $i < sizeof($numbers); $i++) {
        if ($numbers[$i] % 2 == 0) {
            $temp = $numbers[$index];
            $numbers[$index] = $numbers[$i];
            $numbers[$i] = $temp;
            $index++;
        }
    }
    return $numbers;
}

$result = test([1, 2, 5, 3, 5, 4, 6, 9, 11]);
echo "New array: " . implode(',', $result);
