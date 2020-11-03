Viết một chương trình PHP để kiểm tra một số cụ thể có trong một mảng số nguyên nhất định hay không.
Đầu vào mẫu:
{1,2,9,3}, 3
{1,2,2,3}, 2
{1,2,2,3}, 9
Đầu ra mẫu:
bool (true)
bool (true)
bool (sai)

<?php
function test($nums, $n)
{
    if (in_array($n, $nums))
        return true;

    return false;
}

var_dump(test(array(1, 2, 9, 3), 3));
var_dump(test(array(1, 2, 2, 3), 2));
var_dump(test(array(1, 2, 2, 3), 9));
