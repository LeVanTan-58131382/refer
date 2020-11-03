Viết chương trình PHP để tạo một chuỗi mới không có ký tự đầu tiên và cuối cùng của một chuỗi
có độ dài ít nhất là hai.
"Hello"
"Hi"
"Python"
Sample Output:
ell

ytho

<?php
function test($s1)
{
    return substr(substr($s1, 1, strlen($s1) - 1), 0, strlen($s1) - 2);
}

echo test("Hello") . "\n";
echo test("Hi") . "\n";
echo test("Python") . "\n";
