Viết chương trình PHP để tạo một chuỗi mới bằng cách sử dụng n ký tự đầu tiên và cuối cùng từ một chuỗi đã
cho có độ dài ít nhất là n.
Đầu vào mẫu:
"Hello", 1
"Python", 2
"on", 1
"o", 1
Đầu ra mẫu:
Ho
Pyon
on
oo

<?php
function test($s1, $n)
{

    return substr($s1, 0, $n) . substr($s1, strlen($s1) - $n, $n);
}

echo test("Hello", 1) . "\n";
echo test("Python", 2) . "\n";
echo test("on", 1) . "\n";
echo test("o", 1) . "\n";
