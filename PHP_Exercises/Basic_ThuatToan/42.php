Viết một chương trình PHP để kiểm tra xem một số đã cho không âm có phải là bội của 3 hoặc 7 hay không,
nhưng không phải là cả hai.
Đầu vào mẫu:
3
7
21
Đầu ra mẫu:
int (1)
int (1)
int (0)

<?php
function test($n)
{
    return ($n % 3 == 0) ^ ($n % 7 == 0);
}

var_dump(test(3));
var_dump(test(7));
var_dump(test(21));
