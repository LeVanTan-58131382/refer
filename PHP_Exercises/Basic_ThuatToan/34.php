Viết chương trình PHP để kiểm tra xem dãy số 1, 2, 3 có xuất hiện trong một mảng số nguyên đã cho ở đâu đó hay không.
Đầu vào mẫu:
{1,1,2,3,1}
{1,1,2,4,1}
{1,1,2,1,2,3}
Đầu ra mẫu:
bool (true)
bool (sai)
bool (true)

<?php
function test($nums)
{
    for ($i = 0; $i < sizeof($nums) - 2; $i++) {
        if ($nums[$i] == 1 && $nums[$i + 1] == 2 && $nums[$i + 2] == 3)
            return true;
    }
    return false;
}

var_dump(test(array(1, 1, 2, 3, 1)));
var_dump(test(array(1, 1, 2, 4, 1)));
var_dump(test(array(1, 1, 2, 1, 2, 3)));
