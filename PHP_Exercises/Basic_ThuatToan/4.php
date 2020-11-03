Viết một chương trình PHP để kiểm tra một số nguyên đã cho và trả về true nếu nó nằm trong 10 của 100 hoặc 200.
Đầu vào mẫu:
103
90
89
Đầu ra mẫu:
bool (true)
bool (true)
bool (sai)

<?php
function test($x)
{
    if (abs($x - 100) <= 10 || abs($x - 200) <= 10)
        return true;
    return false;
}

var_dump(test(103));
var_dump(test(90));
var_dump(test(89));
