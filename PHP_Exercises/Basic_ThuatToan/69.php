Viết một chương trình PHP để tạo một chuỗi mới không có ký tự đầu tiên và cuối cùng của một chuỗi có độ dài bất kỳ.
Đầu vào mẫu:
"Hello"
"JS"
''
Đầu ra mẫu:
ell

<?php
function test($s1)
{

    return strlen($s1) < 2 ? "" : substr($s1, 1, strlen($s1) - 2);
}

echo test("Hello") . "\n";
echo test("JS") . "\n";
echo test("  ") . "\n";
