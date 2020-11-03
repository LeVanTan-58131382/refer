Viết chương trình PHP để tạo một chuỗi mới có độ dài 2 bắt đầu từ chỉ số đã cho của một chuỗi đã cho.
Đầu vào mẫu:
"Hello", 1
"Python", 2
"on", 1
Đầu ra mẫu:
el
th
on

<?php
function test($s1, $index)
{

    return $index + 2 <= strlen($s1) ? substr($s1, $index, 2) : substr($s1, 0, 2);
}

echo test("Hello", 1) . "\n";
echo test("Python", 2) . "\n";
echo test("on", 1) . "\n";
