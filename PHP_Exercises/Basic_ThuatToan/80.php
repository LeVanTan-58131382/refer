Viết một chương trình PHP để kiểm tra xem hai ký tự đầu tiên và hai ký tự cuối cùng của một chuỗi
đã cho có giống nhau hay không.
Đầu vào mẫu:
"abab"
"abcdef"
"xyzsderxy"
Đầu ra mẫu:
bool (true)
bool (sai)
bool (true)

<?php
function test($s1)
{
    return substr($s1, 0, 2) == substr($s1, strlen($s1) - 2, 2);
}

var_dump(test("abab"));
var_dump(test("abcdef"));
var_dump(test("xyzsderxy"));
