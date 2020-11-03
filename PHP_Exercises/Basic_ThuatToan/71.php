Viết một chương trình PHP để kiểm tra xem một chuỗi đã cho có kết thúc bằng "on" hay không.
Đầu vào mẫu:
"Hello"
"Python"
"trên"
"o"
Đầu ra mẫu:
chuỗi (2) "lo"
chuỗi (2) "trên"
chuỗi (2) "trên"
chuỗi (1) "o"

<?php
function test($s1)
{

    return substr($s1, strlen($s1) - 2, 2);
}

var_dump(test("Hello"));
var_dump(test("Python"));
var_dump(test("on"));
var_dump(test("o"));
