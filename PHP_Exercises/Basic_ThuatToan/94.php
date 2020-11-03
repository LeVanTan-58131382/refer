Viết chương trình PHP để tạo một mảng mới lấy các phần tử đầu tiên và cuối cùng của một mảng số nguyên cho
trước và có độ dài từ 1 trở lên.
Đầu vào mẫu:
{10, 20, -30, -40, 30}
Đầu ra mẫu:
Mảng mới: 10,30

<?php
function test($nums)
{
    return [$nums[0], $nums[sizeof($nums) - 1]];
}

$a = [10, 20, -30, -40, 30];

echo "Original array: " . implode(',', $a) . "\n";

$result = test($a);

echo "New array: " . implode(',', $result);
