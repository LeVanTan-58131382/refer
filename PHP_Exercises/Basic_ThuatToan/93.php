Viết chương trình PHP để tạo một mảng mới chứa các phần tử ở giữa từ hai mảng số nguyên đã cho, mỗi mảng có độ dài 5.

Đầu vào mẫu:
{10, 20, -30, -40, 30}, {10, 20, 30, 40, 30}
Đầu ra mẫu:
Mảng mới: -30, 30

<?php
function test($nums1, $nums2)
{
    return [$nums1[2], $nums2[2]];
}

$nums1 = [10, 20, -30, -40, 30];
$nums2 = [10, 20, 30, 40, 30];
echo "Original array1: " . implode(',', $nums1) . "\n";
echo "Original array2: " . implode(',', $nums1) . "\n";

$result = test($nums1, $nums2);

echo "New array: " . implode(',', $result);
