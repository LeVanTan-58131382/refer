Viết một chương trình PHP để kiểm tra một mảng số nguyên đã cho và trả về true nếu mảng đã cho chứa hai
số 5 cạnh nhau hoặc hai số 5 cách nhau một phần tử.
Đầu vào mẫu:
{5, 5, 1, 5, 5}
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
    $len = sizeof($numbers);
    for ($i = 0; $i < $len - 1; $i++) {
        if ($numbers[$i] == 5 && $numbers[$i + 1] == 5) return true;
        if ($i + 2 < $len && $numbers[$i] == 5 && $numbers[$i + 2] == 5) return true;
    }

    return false;
}

var_dump(test([5, 5, 1, 5, 5]));
var_dump(test([1, 2, 3, 4]));
var_dump(test([3, 3, 5, 5, 5, 5]));
var_dump(test([1, 5, 5, 7, 8, 10]));
