Viết một chương trình PHP để di chuyển hai ký tự cuối cùng đến đầu của một chuỗi có độ dài ít nhất là hai.
Đầu vào mẫu:
"Hello"
"JS"
Đầu ra mẫu:
loHel
JS

<?php
function test($s1)
{

    return substr($s1, strlen($s1) - 2, 2) . substr($s1, 0, strlen($s1) - 2);
}

echo test("Hello") . "\n";
echo test("JS") . "\n";
