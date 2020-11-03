Viết chương trình PHP để kiểm tra xem giá trị của mỗi phần tử có bằng hoặc lớn hơn
giá trị của phần tử trước đó của một mảng số nguyên cho trước hay không.
Đầu vào mẫu:
{5, 5, 1, 5, 5}
{1, 2, 3, 4}
{3, 3, 5, 5, 5, 5}
{1, 5, 5, 7, 8, 10}
Đầu ra mẫu:
bool (sai)
bool (true)
bool (true)
bool (true)

<?php
function test($numbers)
{
    for ($i = 0; $i < sizeof($numbers) - 1; $i++) {
        if ($numbers[$i + 1] < $numbers[$i])
            return false;
    }
    return true;
}

var_dump(test([5, 5, 1, 5, 5]));
var_dump(test([1, 2, 3, 4]));
var_dump(test([3, 3, 5, 5, 5, 5]));
var_dump(test([1, 5, 5, 7, 8, 10]));
