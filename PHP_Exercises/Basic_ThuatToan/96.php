Viết chương trình PHP để kiểm tra xem một mảng đã cho gồm các số nguyên và độ dài 2, không chứa 15 hoặc 20.
Đầu vào mẫu:
{12, 20}
{14, 15}
{11, 21}
Đầu ra mẫu:
bool (sai)
bool (sai)
bool (true)

<?php
function test($nums)
{
    return $nums[0] != 15 && $nums[0] != 20 && $nums[1] != 15 && $nums[1] != 20;
}

var_dump(test([12, 20]));
var_dump(test([14, 15]));
var_dump(test([11, 21]));
