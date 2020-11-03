Viết một chương trình PHP để kiểm tra xem một chuỗi đã cho bắt đầu bằng 'abc' hoặc 'xyz' hay không.
Nếu chuỗi bắt đầu bằng 'abc' hoặc 'xyz' thì trả về 'abc' hoặc 'xyz' nếu không thì trả về chuỗi trống.
Đầu vào mẫu:
"abc"
"abcdef"
"C"
"XYZ"
"xyzsder"
Đầu ra mẫu:
abc
abc

XYZ
XYZ

<?php
function test($s1)
{
    if (substr($s1, 0, 3) == "abc") {
        return "abc";
    } else if (substr($s1, 0, 3) == "xyz") {
        return "xyz";
    } else {
        return "";
    }
}

echo test("abc") . "\n";
echo test("abcdef") . "\n";
echo test("C") . "\n";
echo test("xyz") . "\n";
echo test("xyzsder") . "\n";
