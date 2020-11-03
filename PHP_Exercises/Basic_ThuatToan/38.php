Viết một chương trình PHP để kiểm tra xem một bộ ba có trong một mảng các số nguyên hay không.
Nếu một giá trị xuất hiện ba lần liên tiếp trong một mảng thì nó được gọi là bộ ba.
Đầu vào mẫu:
{1, 1, 2, 2, 1}
{1, 1, 2, 1, 2, 3}
{1, 1, 1, 2, 2, 2, 1}
Đầu ra mẫu:
bool (sai)
bool (sai)
bool (true)

<?php
function test($nums)
{
    $arra_len = sizeof($nums) - 1;
    $n = 0;
    for ($i = 0; $i < $arra_len; $i++) {
        $n = $nums[$i];
        if ($n == $nums[$i + 1] && $n == $nums[$i + 2]) return true;
    }
    return false;
}

var_dump(test(array(1, 1, 2, 2, 1)));
var_dump(test(array(1, 1, 2, 1, 2, 3)));
var_dump(test(array(1, 1, 1, 2, 2, 2, 1)));
