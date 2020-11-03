Viết chương trình PHP để tìm ra phần tử lớn nhất giữa phần tử đầu tiên hoặc cuối cùng trong một mảng
số nguyên cho trước (độ dài 4), thay thế tất cả các phần tử bằng phần tử tối đa.
Đầu vào mẫu:
{10, 20, -30, -40}
Đầu ra mẫu:
Mảng mới với các giá trị tối đa: 20,20,20,20

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
