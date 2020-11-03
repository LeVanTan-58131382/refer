Viết một chương trình PHP để kiểm tra xem một chuỗi đã cho có bắt đầu bằng 'C #' hay không.
Đầu vào mẫu:
"PHP"
"C #"
"C ++"
Đầu ra mẫu:
bool (true)
bool (true)
bool (sai)

<?php
function test($str)
{
    return (strlen($str) < 3 && $str == "C#") || (substr($str, 0, 2) == "C#" && substr($str, 2, 1) == ' ');
}

var_dump(test("C# Sharp"));
var_dump(test("C#"));
var_dump(test("C++"));
