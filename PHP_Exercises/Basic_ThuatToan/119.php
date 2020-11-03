Viết chương trình PHP để kiểm tra một mảng số nguyên đã cho và trả về true nếu mảng đã
cho chứa 2 giá trị chẵn hoặc 2 giá trị lẻ cạnh nhau.
Đầu vào mẫu:
{3, 5, 1, 3, 7}
{1, 2, 3, 4}
{3, 3, 5, 5, 5, 5}
{2, 4, 5, 6}
Đầu ra mẫu:
bool (true)
bool (sai)
bool (true)
bool (true)

<?php
function test($numbers)
{
    $tot_odd = 0;
    $tot_even = 0;

    for ($i = 0; $i < sizeof($numbers); $i++) {
        if ($tot_odd < 2 && $tot_even < 2) {
            if ($numbers[$i] % 2 == 0) {
                $tot_even++;
                $tot_odd = 0;
            } else {
                $tot_odd++;
                $tot_even = 0;
            }
        }
    }
    return $tot_odd == 2 || $tot_even == 2;
}

var_dump(test([3, 5, 1, 3, 7]));
var_dump(test([1, 2, 3, 4]));
var_dump(test([3, 3, 5, 5, 5, 5]));
var_dump(test([2, 4, 5, 6]));
