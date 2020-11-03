Viết chương trình PHP để kiểm tra một mảng số nguyên đã cho và trả về true nếu giá trị 5 xuất hiện
5 lần và không có số 5 nào cạnh nhau.
Đầu vào mẫu:
{3, 5, 1, 5, 3, 5, 7, 5, 1, 5}
{3, 5, 5, 5, 5, 5, 5}
{3, 5, 2, 5, 4, 5, 7, 5, 8, 5}
{2, 4, 5, 5, 5, 5}
Đầu ra mẫu:
bool (true)
bool (sai)
bool (true)
bool (sai)

<?php
function test($numbers)
{
    $flag = false;
    $five = 0;

    for ($i = 0; $i < sizeof($numbers); $i++) {
        if ($numbers[$i] == 5 && !$flag) {
            $five++;
            $flag = true;
        } else {
            $flag = false;
        }
    }

    return $five == 5;
}

var_dump(test([3, 5, 1, 5, 3, 5, 7, 5, 1, 5]));
var_dump(test([3, 5, 5, 5, 5, 5, 5]));
var_dump(test([3, 5, 2, 5, 4, 5, 7, 5, 8, 5]));
var_dump(test([2, 4, 5, 5, 5, 5]));
