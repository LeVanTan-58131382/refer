Viết chương trình PHP để kiểm tra một mảng số nguyên đã cho và trả về true nếu mảng chứa 10 hoặc 20 hai lần.
Độ dài của mảng sẽ là 0, 1 hoặc 2.
Đầu vào mẫu:
{12, 20}
{20, 20}
{10, 10}
{10}
Đầu ra mẫu:
bool (sai)
bool (true)
bool (true)
bool (sai)

<?php
function test($nums)
{
    return sizeof($nums) == 2 && (($nums[0] == 10 && $nums[1] == 10) || ($nums[0] == 20 && $nums[1] == 20));
}

var_dump(test([12, 20]));
var_dump(test([20, 20]));
var_dump(test([10, 10]));
var_dump(test([10]));
