Viết chương trình PHP để xóa ký tự ở một vị trí nhất định của một chuỗi đã cho.
Vị trí đã cho sẽ nằm trong phạm vi 0..độ dài chuỗi -1.
Đầu vào mẫu:
"Python", 1
"Python", o
"Python", 4
Đầu ra mẫu:
Pthon
ython
Pythn

<?php
function test($s, $n)
{
    return substr($s, 0, $n) . substr($s, $n + 1, strlen($s) - $n);
}

echo test("Python", 1) . "\n";
echo test("Python", 0) . "\n";
echo test("Python", 4) . "\n";
