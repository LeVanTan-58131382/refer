Viết một chương trình PHP để nối hai chuỗi đã cho. Nếu các chuỗi đã cho có độ dài khác nhau,
hãy xóa các ký tự khỏi chuỗi dài hơn.
Đầu vào mẫu:
"abc", "abcd"
"Python", "Python"
"JS", "Python"
Đầu ra mẫu:
abcbcd
PythonPython
JSon

<?php
function test($s1, $s2)
{
    if (strlen($s1) < strlen($s2)) {
        return $s1 . substr($s2, strlen($s2) - strlen($s1));
    } else if (strlen($s1) > strlen($s2)) {
        return  substr($s1, strlen($s1) - strlen($s2)) . $s2;
    } else {
        return $s1 . $s2;
    }
}

echo test("abc", "abcd") . "\n";
echo test("Python", "Python") . "\n";
echo test("JS", "Python") . "\n";
