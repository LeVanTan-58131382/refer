Viết chương trình PHP để tạo một mảng lấy hai phần tử ở giữa từ một mảng các số nguyên có độ dài chẵn cho trước.
Đầu vào mẫu:
{1, 5, 7, 9, 11, 13}
Đầu ra mẫu:
Mảng mới: 7 9

<?php
function test($numbers)
{
    return [$numbers[sizeof($numbers) / 2 - 1], $numbers[sizeof($numbers) / 2]];
}

$result = test([1, 5, 7, 9, 11, 13]);
echo "New array: " . implode(',', $result);
