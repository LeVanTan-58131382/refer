Viết một chương trình PHP để kiểm tra xem một mảng số nguyên đã cho có chứa 5 bên cạnh số 5 ở đâu đó hay không. Đi tới trình chỉnh sửa
Đầu vào mẫu:
{1, 5, 6, 9, 10, 17}
{1, 5, 5, 9, 10, 17}
{1, 5, 5, 9, 10, 17, 5, 5}
Đầu ra mẫu:
bool (sai)
bool (true)
bool (true)

<?php
function test($nums)
{

    for ($i = 0; $i < sizeof($nums) - 1; $i++) {
        if ($nums[$i] == 5 && $nums[$i] == $nums[$i + 1]) return true;
    }

    return false;
}

var_dump(test([1, 5, 6, 9, 10, 17]));
var_dump(test([1, 5, 5, 9, 10, 17]));
var_dump(test([1, 5, 5, 9, 10, 17, 5, 5]));
