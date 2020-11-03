Viết chương trình PHP để kiểm tra xem một trong 4 phần tử đầu tiên trong mảng số nguyên có
bằng một phần tử đã cho hay không.
Đầu vào mẫu:
{1,2,9,3}, 3
{1,2,3,4,5,6}, 2
{1,2,2,3}, 9
Đầu ra mẫu:
bool (true)
bool (true)
bool (sai)

<?php
function test($nums, $n)
{
    return sizeof($nums) < 4 ? in_array($n, $nums) : in_array($n, array_slice($nums, 0, 4));
}

var_dump(test(array(1, 2, 9, 3), 3));
var_dump(test(array(1, 2, 3, 4, 5, 6), 2));
var_dump(test(array(1, 2, 2, 3), 9));
