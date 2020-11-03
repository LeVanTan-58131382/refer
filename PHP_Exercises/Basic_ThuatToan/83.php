Viết chương trình PHP để tạo một chuỗi mới từ một chuỗi đã cho. Nếu hai ký tự của chuỗi đã cho từ đầu và
cuối của nó giống nhau thì trả về chuỗi đã cho mà không có hai ký tự đầu tiên,
nếu không thì trả về chuỗi ban đầu.
Đầu vào mẫu:
"abcab"
"Python"
Đầu ra mẫu:
taxi
Python

<?php
function test($s1)
{
    if (strlen($s1) > 1 && substr($s1, 0, 2) == substr($s1, strlen($s1) - 2)) {
        return substr($s1, 2);
    } else {
        return $s1;
    }
}

echo test("abcab") . "\n";
echo test("Python") . "\n";
