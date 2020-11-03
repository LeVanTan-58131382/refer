Viết một chương trình PHP để kiểm tra xem một mảng số nguyên đã cho có chứa 5 và 7 hay không.
Đầu vào mẫu:
{1, 5, 6, 9, 10, 17}
{1, 4, 7, 9, 10, 17}
{1, 1, 2, 9, 10, 17}
Đầu ra mẫu:
bool (true)
bool (true)
bool (sai)


<?php
function test($nums)
{

    for ($i = 0; $i < sizeof($nums); $i++) {
        if ($nums[$i] == 5 || $nums[$i] == 7) return true;
    }

    return false;
}

var_dump(test([1, 5, 6, 9, 10, 17]));
var_dump(test([1, 4, 7, 9, 10, 17]));
var_dump(test([1, 1, 2, 9, 10, 17]));
