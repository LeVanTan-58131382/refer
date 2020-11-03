Viết chương trình PHP để kiểm tra xem một mảng số nguyên đã cho có chứa 3 hoặc 5.
Đầu vào mẫu:
{5, 5, 5, 5, 5}
{3, 3, 3, 3}
{3, 3, 3, 5, 5, 5}
{1, 6, 8, 10}
Đầu ra mẫu:
bool (true)
bool (true)
bool (true)
bool (sai)

<?php
function test($nums)
{

    for ($i = 0; $i < sizeof($nums); $i++) {
        if ($nums[$i] != 3 && $nums[$i] != 5) return false;
    }
    return true;
}

var_dump(test([5, 5, 5, 5, 5]));
var_dump(test([3, 3, 3, 3]));
var_dump(test([3, 3, 3, 5, 5, 5]));
var_dump(test([1, 6, 8, 10]));
