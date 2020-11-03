Viết một chương trình PHP để tạo một chuỗi mới được tạo từ mọi ký tự khác bắt đầu bằng ký tự đầu
tiên từ một chuỗi đã cho.
Đầu vào mẫu:
"Python"
"PHP"
"JS"
Đầu ra mẫu:
Pto
PP
J

<?php
function test($s)
{
    $result = "";
    for ($i = 0; $i < strlen($s); $i++) {
        if ($i % 2 == 0)
            $result = $result . substr($s, $i, 1);
    }
    return $result;
}

echo test("Python") . "\n";
echo test("PHP") . "\n";
echo test("JS") . "\n";
