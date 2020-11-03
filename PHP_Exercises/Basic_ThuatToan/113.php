Viết chương trình PHP để kiểm tra xem số 3 có lớn hơn số 5 hay không.
Đầu vào mẫu:
{1, 5, 6, 9, 3, 3}
{1, 5, 5, 5, 10, 17}
{1, 3, 3, 5, 5, 5}
Đầu ra mẫu:
bool (true)
bool (sai)
bool (sai)

<?php
function test($nums)
{

    $no_3 = 0;
    $no_5 = 0;

    for ($i = 0; $i < sizeof($nums); $i++) {
        if ($nums[$i] == 3) $no_3++;
        if ($nums[$i] == 5) $no_5++;
    }

    return $no_3 > $no_5;
}

var_dump(test([1, 5, 6, 9, 3, 3]));
var_dump(test([1, 5, 5, 5, 10, 17]));
var_dump(test([1, 3, 3, 5, 5, 5]));
