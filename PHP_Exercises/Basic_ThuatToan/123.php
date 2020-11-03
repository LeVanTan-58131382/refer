Viết chương trình PHP để kiểm tra một mảng số nguyên đã cho và trả về true nếu mảng
chứa ba số liền kề tăng dần.
Đầu vào mẫu:
{1, 2, 3, 5, 3, 7}
{3, 7, 5, 5, 3, 7}
{3, 7, 5, 5, 6, 7, 5}
Đầu ra mẫu:
bool (true)
bool (sai)
bool (true)

<?php
function test($numbers)
{
    for ($i = 0; $i <= sizeof($numbers) - 3; $i++) {
        if (
            $numbers[$i] == $numbers[$i + 1] - 1
            && $numbers[$i] == $numbers[$i + 2] - 2
        ) {
            return true;
        }
    }
    return false;
}

var_dump(test([1, 2, 3, 5, 3, 7]));
var_dump(test([3, 7, 5, 5, 3, 7]));
var_dump(test([3, 7, 5, 5, 6, 7, 5]));
