Viết chương trình PHP để tạo một chuỗi mới từ một chuỗi đã cho sau khi hoán đổi hai ký tự cuối cùng.
Sample Input:
"Hello"
"Python"
"PHP"
"JS"
"C"
Sample Output:
Helol
Pythno
PPH
SJ
C

<?php
function test($s1)
{
    if (strlen($s1) > 1) {
        return substr($s1, 0, strlen($s1) - 2) . substr($s1, strlen($s1) - 1, 1) . substr($s1, strlen($s1) - 2, 1);
    } else {
        return $s1;
    }
}

echo test("Hello") . "\n";
echo test("Python") . "\n";
echo test("PHP") . "\n";
echo test("JS") . "\n";
echo test("C") . "\n";
