Viết chương trình PHP để kiểm tra một mảng đã cho gồm các số nguyên có độ dài từ 1 trở lên và trả về true
nếu 10 xuất hiện dưới dạng phần tử đầu tiên hoặc cuối cùng trong mảng đã cho.
Đầu vào mẫu:
{10, 20, 40, 50}
{5, 20, 40, 10}
{10, 20, 40, 10}
{12, 24, 35, 55}
Đầu ra mẫu:
bool (true)
bool (true)
bool (true)
bool (sai)

<?php
function test($nums)
{
    return $nums[0] == 10 || $nums[sizeof($nums) - 1] == 10;
}

var_dump(test([10, 20, 40, 50]));
var_dump(test([5, 20, 40, 10]));
var_dump(test([10, 20, 40, 10]));
var_dump(test([12, 24, 35, 55]));
