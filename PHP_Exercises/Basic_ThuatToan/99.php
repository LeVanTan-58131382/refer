Viết chương trình PHP để tính tổng của hai mảng số nguyên đã cho, độ dài 3 và tìm mảng có tổng lớn nhất.
Đầu vào mẫu:
{10, 20, -30}, {10, 20, 30}
Đầu ra mẫu:
Mảng mới có giá trị tối đa: 10,20,30

<?php
function test($nums1, $nums2)
{
    return $nums1[0] + $nums1[1] + $nums1[2] >= $nums2[0] + $nums2[1] + $nums2[2] ? $nums1 : $nums2;
}

$result = test([10, 20, -30], [10, 20, 30]);
echo "New array with maximum values: " . implode(',', $result);
