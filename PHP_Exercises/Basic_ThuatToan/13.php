Viết một chương trình PHP để kiểm tra xem một nhiệt độ nhất định có nhỏ hơn 0 và
nhiệt độ kia lớn hơn 100 hay không.
Đầu vào mẫu:
120, -1
-1, 120
2, 120
Đầu ra mẫu:
bool (true)
bool (true)
bool (sai)

<?php
function test($temp1, $temp2)
{
    return $temp1 < 0 && $temp2 > 100 || $temp2 < 0 && $temp1 > 100;
}

var_dump(test(120, -1));
var_dump(test(-1, 120));
var_dump(test(2, 120));
