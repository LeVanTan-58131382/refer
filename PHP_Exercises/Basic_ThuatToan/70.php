Viết một chương trình PHP để tạo một chuỗi mới bằng cách sử dụng hai ký tự giữa của một chuỗi có
độ dài chẵn (ít nhất là 2).
Đầu vào mẫu:
"Hell"
"JS"
Đầu ra mẫu:
el
JS

<?php
function test($s1)
{

    return substr($s1, strlen($s1) / 2 - 1, 2);
}

echo test("Hell") . "\n";
echo test("JS") . "\n";
echo test("  ") . "\n";
