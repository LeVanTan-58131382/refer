Viết chương trình PHP để tạo một chuỗi mới là 4 bản sao của 2 ký tự phía trước của một chuỗi đã cho.
Nếu độ dài chuỗi đã cho nhỏ hơn 2 thì trả về chuỗi ban đầu.
Đầu vào mẫu:
"C Sharp"
"JS"
"a"
Đầu ra mẫu:
C C C C
JSJSJSJS
a

<?php
function test($str)
{
    return strlen($str) < 2 ? $str : substr($str, 0, 2) . substr($str, 0, 2) . substr($str, 0, 2) . substr($str, 0, 2);
}

echo test("C Sharp") . "\n";
echo test("JS") . "\n";
echo test("a") . "\n";
