Viết một chương trình PHP để kiểm tra hai mảng đã cho gồm các số nguyên có độ dài từ 1 trở lên
và trả về true nếu chúng có cùng phần tử đầu tiên hoặc chúng có cùng phần tử cuối cùng.
Đầu vào mẫu:
{[10, 20, 40, 50], [10, 20, 40, 50]}
{[10, 20, 40, 10], [10, 20, 40, 5]}
{[12, 24, 35, 55], [1, 20, 40, 5]}
Đầu ra mẫu:
bool (true)
bool (true)
bool (sai)

<?php
function test($a1, $a2)
{
    return $a1[0] == $a2[0] || $a1[sizeof($a1) - 1] == $a2[sizeof($a2) - 1];
}

var_dump(test([10, 20, 40, 50], [10, 20, 40, 50]));
var_dump(test([10, 20, 40, 10], [10, 20, 40, 5]));
var_dump(test([12, 24, 35, 55], [1, 20, 40, 5]));
