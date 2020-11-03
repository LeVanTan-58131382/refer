Viết một chương trình PHP để nối hai chuỗi đã cho có độ dài ít nhất là 1, sau khi loại bỏ ký tự đầu tiên của chúng. Đi tới trình chỉnh sửa
Đầu vào mẫu:
"Hello", "Hi"
"JS", "Python"
Đầu ra mẫu:
elloi
Sython

<?php
function test($s1, $s2)
{
    return substr($s1, 1, strlen($s1) - 1) . substr($s2, 1, strlen($s2) - 1);
}

echo test("Hello", "Hi") . "\n";
echo test("JS", "Python") . "\n";
