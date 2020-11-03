Viết chương trình PHP để trao đổi ký tự đầu tiên và ký tự cuối cùng trong một chuỗi nhất định và trả về chuỗi mới.
Đầu vào mẫu:
"A B C D"
"a"
"xy"
Đầu ra mẫu:
dbca
a
yx

<?php
function test($str)
{
    return strlen($str) > 1 ? substr($str, strlen($str) - 1) . substr($str, 1, strlen($str) - 2) . substr($str, 0, 1) : $str;
}

echo test("abcd") . "\n";
echo test("a") . "\n";
echo test("xy") . "\n";
