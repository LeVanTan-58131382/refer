Viết một chương trình PHP để kiểm tra ba số nguyên đã cho (nhỏ, vừa và lớn) và trả về
true nếu sự khác biệt giữa nhỏ và trung bình và sự khác biệt giữa trung bình và lớn là như nhau.
Đầu vào mẫu:
4, 5, 6
7, 12, 13
-1, 0, 1
Đầu ra mẫu:
bool (true)
bool (sai)
bool (true)

<?php
function test($x, $y, $z)
{
    if ($x > $y && $x > $z && $y > $z) return $x - $y == $y - $z;
    if ($x > $y && $x > $z && $z > $y) return $x - $z == $z - $y;
    if ($y > $x && $y > $z && $x > $z) return $y - $x == $x - $z;
    if ($y > $x && $y > $z && $z > $x) return $y - $z == $z - $x;
    if ($z > $x && $z > $y && $x > $y) return $z - $x == $x - $y;
    return $z - $y == $y - $x;
}

var_dump(test(4, 5, 6));
var_dump(test(7, 12, 13));
var_dump(test(-1, 0, 1));
