Viết một chương trình PHP để tạo một chuỗi mới trong đó 'if' được thêm vào phía trước của một chuỗi đã cho.
Nếu chuỗi đã bắt đầu bằng 'if', hãy trả về chuỗi không đổi.
Đầu vào mẫu:
"if else"
"else"
Đầu ra mẫu:
if else
if else

<?php
function test($s)
{
    if (strlen($s) > 2 && substr($s, 0, 2) == "if") {
        return $s;
    }
    return "if " . $s;
}

echo test("if else") . "\n";
echo test("else") . "\n";
