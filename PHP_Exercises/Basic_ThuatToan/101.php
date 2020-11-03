Viết một chương trình PHP để tạo một mảng mới từ hai mảng số nguyên cho trước, mỗi độ dài là 3.
Đầu vào mẫu:
{10, 20, 30}, {40, 50, 60}
Đầu ra mẫu:
Mảng mới: 10,20,30,40,50,60

<?php
function test($nums1, $nums2)
{

    return [$nums1[0], $nums1[1], $nums1[2], $nums2[0], $nums2[1], $nums2[2]];
}

$result = test([10, 20, 30], [40, 50, 60]);
echo "New array: " . implode(',', $result);
