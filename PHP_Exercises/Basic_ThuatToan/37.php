Viết chương trình PHP để đếm số lượng hai chữ 5 cạnh nhau trong một mảng các số nguyên.
Đồng thời đếm tình huống số 5 thứ hai thực sự là số 6.
Đầu vào mẫu:
{5, 5, 2}
{5, 5, 2, 5, 5}
{5, 6, 2, 9}
Đầu ra mẫu:
1
2
1

<?php
function test($numbers)
{
    $ctr = 0;
    for ($i = 0; $i < sizeof($numbers) - 1; $i++) {
        if (($numbers[$i] == 5) && ($numbers[$i + 1] == 5) || ($numbers[$i + 1] == 6)) $ctr++;
    }
    return $ctr;
}

echo test([5, 5, 2]) . "\n";
echo test([5, 5, 2, 5, 5]) . "\n";
echo test([5, 6, 2, 9]) . "\n";
