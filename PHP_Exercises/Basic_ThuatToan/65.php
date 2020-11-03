Viết một chương trình PHP để tạo một chuỗi mới từ hai chuỗi đã cho, một chuỗi ngắn hơn và một chuỗi khác dài hơn.
Định dạng của chuỗi mới sẽ là chuỗi dài + chuỗi ngắn + chuỗi dài.
Đầu vào mẫu:
"Hello", "Hi"
"JS", "Python"
Đầu ra mẫu:
HelloHiHello
PythonJSPython

<?php
function test($s1, $s2)
{
    return strlen($s1) < strlen($s2) ? $s2 . $s1 . $s2 : $s1 . $s2 . $s1;
}

echo test("Hello", "Hi") . "\n";
echo test("JS", "Python") . "\n";
