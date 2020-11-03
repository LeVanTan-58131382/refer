Viết chương trình PHP để tính tổng của ba số nguyên đã cho. Tuy nhiên, nếu bất kỳ giá trị nào nằm
trong phạm vi 10..20 thì giá trị đó được tính là 0, ngoại trừ 13 và 17.
Đầu vào mẫu:
4, 5, 7
7, 4, 12
10, 13, 12
17, 12, 18
Đầu ra mẫu:
16
11
13
17

<?php
function test($x, $y, $z)
{
    return fix_num($x) + fix_num($y) + fix_num($z);
}


function fix_num($n)
{
    return (($n < 13 && $n > 9) || ($n > 17 && $n < 21)) ? 0 : $n;
}

echo (test(4, 5, 7)) . "\n";
echo (test(7, 4, 12)) . "\n";
echo (test(10, 13, 12)) . "\n";
echo (test(17, 12, 18)) . "\n";
