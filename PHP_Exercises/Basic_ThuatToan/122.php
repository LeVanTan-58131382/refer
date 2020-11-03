Viết chương trình PHP để kiểm tra một mảng số nguyên đã cho và trả về true nếu số phần tử
giống nhau được chỉ định xuất hiện ở đầu và cuối của mảng đã cho.
Đầu vào mẫu:
{3, 7, 5, 5, 3, 7}, 2
{3, 7, 5, 5, 3, 7}, 3
{3, 7, 5, 5, 3, 7, 5}, 3
Đầu ra mẫu:
bool (true)
bool (sai)
bool (true)

<?php
function test($numbers, $len)
{
    $arra_size = sizeof($numbers);

    for ($i = 0; $i < $len; $i++) {
        if ($numbers[$i] != $numbers[$arra_size - $len + $i]) {
            return false;
        }
    }

    return true;
}

var_dump(test([3, 7, 5, 5, 3, 7], 2));
var_dump(test([3, 7, 5, 5, 3, 7], 3));
var_dump(test([3, 7, 5, 5, 3, 7, 5], 3));
