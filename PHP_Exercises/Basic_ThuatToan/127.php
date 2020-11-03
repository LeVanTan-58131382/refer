Viết chương trình PHP để tạo một mảng mới từ một mảng số nguyên đã cho, dịch chuyển tất cả các
số không sang hướng trái.
Đầu vào mẫu:
{1, 2, 0, 3, 5, 7, 0, 9, 11}
Đầu ra mẫu:
Mảng mới: 0,0,1,3,5,7,2,9,11

<?php
function test($numbers)
{
    $pos = 0;
    for ($i = 0; $i < sizeof($numbers); $i++) {
        if ($numbers[$i] == 0) {
            $numbers[$i] = $numbers[$pos];
            $numbers[$pos++] = 0;
        }
    }
    return $numbers;
}

$result = test([1, 2, 0, 3, 5, 7, 0, 9, 11]);
echo "New array: " . implode(',', $result);
