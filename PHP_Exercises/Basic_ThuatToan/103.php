Viết một chương trình PHP để tạo một mảng mới có độ dài 3 từ một mảng đã cho (độ dài ít nhất là 3)
bằng cách sử dụng các phần tử ở giữa mảng.
Đầu vào mẫu:
{1, 5, 7, 9, 11, 13}
Đầu ra mẫu:
Mảng mới: 7,9,11

<?php
function test($numbers)
{

    return [$numbers[sizeof($numbers) / 2 - 1], $numbers[sizeof($numbers) / 2], $numbers[sizeof($numbers) / 2 + 1]];
}

$result = test([1, 5, 7, 9, 11, 13]);
echo "New array: " . implode(',', $result);
