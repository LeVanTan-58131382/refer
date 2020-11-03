Viết chương trình PHP để kiểm tra xem một mảng số nguyên có chứa số 3 bên cạnh số 3 hay số 5
bên cạnh số 5 hoặc cả hai.
Đầu vào mẫu:
{5, 5, 5, 5, 5}
{1, 2, 3, 4}
{3, 3, 5, 5, 5, 5}
{1, 5, 5, 7, 8, 10}
Đầu ra mẫu:
bool (true)
bool (sai)
bool (true)
bool (true)

<?php
function test($numbers)
{

    for ($i = 0; $i < sizeof($numbers) - 1; $i++)
        if (($numbers[$i] == 3 && $numbers[$i + 1] == 3) || ($numbers[$i] == 5 && $numbers[$i] == 5))
            return true;
    return false;
}

var_dump(test([5, 5, 5, 5, 5]));
var_dump(test([1, 2, 3, 4]));
var_dump(test([3, 3, 5, 5, 5, 5]));
var_dump(test([1, 5, 5, 7, 8, 10]));
