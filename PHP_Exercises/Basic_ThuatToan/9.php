Viết chương trình PHP để tạo một chuỗi mới với ký tự cuối cùng được thêm vào ở phía trước
và phía sau của một chuỗi đã cho có độ dài 1 hoặc nhiều hơn.
Sample Input:
"Red"
"Green"
"1"
Sample Output:
dRedd
nGreenn
111

<?php
function test($str)
{
    $s = substr($str, strlen($str) - 1);
    return $s . $str . $s;
}

echo test("Red") . "\n";
echo test("Green") . "\n";
echo test("1") . "\n";
