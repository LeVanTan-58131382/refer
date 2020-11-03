Viết chương trình PHP để tính tổng các giá trị trong một mảng số nguyên cho trước trừ số 17.
Trả về 0 nếu mảng đã cho không có số nguyên.
Đầu vào mẫu:
{1, 5, 7, 9, 10, 17}
Đầu ra mẫu:
Tổng các giá trị trong mảng các số nguyên trừ số 17: 32

<?php
function test($nums)
{

    $sum = 0;

    for ($i = 0; $i < sizeof($nums); $i++) {
        if ($nums[$i] != 17) $sum += $nums[$i];
    }
    return $sum;
}

echo "Sum of values in the array of integers except the number 17: " . test([1, 5, 7, 9, 10, 17]);
