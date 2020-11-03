Viết chương trình PHP để kiểm tra một mảng số nguyên đã cho và trả về true nếu có số 3 với số 5 ở
đâu đó sau đó trong mảng đã cho.
Đầu vào mẫu:
{3, 5, 1, 3, 7}
{1, 2, 3, 4}
{3, 3, 5, 5, 5, 5}
{2, 5, 5, 7, 8, 10}
Đầu ra mẫu:
bool (true)
bool (sai)
bool (true)
bool (sai)

<?php
function test($numbers)
{
    $three = false;

    for ($i = 0; $i < sizeof($numbers); $i++) {
        if ($three && $numbers[$i] == 5) return true;
        if ($numbers[$i] == 3) $three = true;
    }
    return false;
}

var_dump(test([3, 5, 1, 3, 7]));
var_dump(test([1, 2, 3, 4]));
var_dump(test([3, 3, 5, 5, 5, 5]));
var_dump(test([2, 5, 5, 7, 8, 10]));
