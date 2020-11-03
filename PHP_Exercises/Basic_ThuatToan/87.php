Viết chương trình PHP để kiểm tra một mảng đã cho gồm các số nguyên có độ dài từ 1 trở lên và trả
về true nếu phần tử đầu tiên và phần tử cuối cùng bằng nhau trong mảng đã cho.
Đầu vào mẫu:
{10, 20, 40, 50}
{10, 20, 40, 10}
{12, 24, 35, 55}
Đầu ra mẫu:
bool (sai)
bool (true)
bool (sai)

<?php
function test($nums)
{
    return sizeof($nums) > 0 && $nums[0] == $nums[sizeof($nums) - 1];
}

var_dump(test([10, 20, 40, 50]));
var_dump(test([10, 20, 40, 10]));
var_dump(test([12, 24, 35, 55]));
