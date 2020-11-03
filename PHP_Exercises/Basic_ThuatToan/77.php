Viết một chương trình PHP để nối hai chuỗi đã cho (chữ thường). Nếu có bất kỳ ký tự kép nào trong chuỗi mới thì
hãy bỏ qua một ký tự.
Đầu vào mẫu:
"abc", "mèo"
"python", "php"
"php", "php"
Đầu ra mẫu:
abcat
PythonPHP
phphp

<?php
function test($s1, $s2)
{
    if (strlen($s1) < 1) {
        return $s2;
    }
    if (strlen($s2) < 1) {
        return s1;
    }
    return substr($s1, strlen($s1) - 1, 1) <> substr($s2, 0, 1) ? $s1 . $s2 : $s1 . substr($s2, 1, strlen($s1) - 1);
}
echo test("abc", "cat") . "\n";
echo test("Python", "PHP") . "\n";
echo test("php", "php") . "\n";
