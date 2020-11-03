Viết chương trình PHP để tạo một chuỗi mới lấy ít nhất 3 ký tự từ giữa một chuỗi nhất định là 3.
Sample Input:
"Hello"
"Python"
"abc"
Sample Output:
ell
yth
abc

<?php
function test($s1)
{

    return substr($s1, (strlen($s1) - 1) / 2 - 1, 3);
}

echo test("Hello") . "\n";
echo test("Python") . "\n";
echo test("abc") . "\n";
