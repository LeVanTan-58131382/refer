Viết chương trình PHP để kiểm tra xem tổng của tất cả 5 'trong mảng có chính xác là 15
trong một mảng số nguyên cho trước hay không.
Đầu vào mẫu:
{1, 5, 6, 9, 10, 17}
{1, 5, 5, 5, 10, 17}
{1, 1, 5, 5, 5, 5}
Đầu ra mẫu:
bool (sai)
bool (true)
bool (sai)

<?php
function test($nums)
{

    $sum = 0;

    for ($i = 0; $i < sizeof($nums); $i++) {
        if ($nums[$i] == 5)
            $sum += 5;
    }

    return $sum == 15;
}

var_dump(test([1, 5, 6, 9, 10, 17]));
var_dump(test([1, 5, 5, 5, 10, 17]));
var_dump(test([1, 1, 5, 5, 5, 5]));
