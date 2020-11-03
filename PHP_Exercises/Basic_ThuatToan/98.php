Viết chương trình PHP để kiểm tra một mảng số nguyên cho trước, độ dài 3 và tạo một mảng mới.
Nếu có 5 trong mảng đã cho, ngay sau đó là 7 thì đặt 7 thành 1.
Đầu vào mẫu:
{1, 5, 7}
Đầu ra mẫu:
Mảng mới với các giá trị lớn nhất: 1,5,1

<?php
function test($numbers)
{
    for ($i = 0; $i < sizeof($numbers) - 1; $i++) {
        if ($numbers[$i] == 5 && $numbers[$i + 1] == 7)
            $numbers[$i + 1] = 1;
    }
    return $numbers;
}

$a = [1, 5, 7];
echo "Original array: " . implode(',', $a) . "\n";
$result = test($a);
echo "New array with maximum values: " . implode(',', $result);
