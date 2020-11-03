Viết chương trình PHP để tạo một chuỗi mới có độ dài 2, sử dụng hai ký tự đầu tiên của một chuỗi đã cho.
Nếu độ dài chuỗi đã cho nhỏ hơn 2, hãy sử dụng '#' làm ký tự bị thiếu.
Sample Input:
"Hello"
"Python"
"a"
""
Sample Output:
He
Py
a#
#

<?php
function test($s1)
{

    if (strlen($s1) >= 2) {
        $s1 = substr($s1, 0, 2);
    } else if (strlen($s1) > 0) {
        $s1 = substr($s1, 0, 1) . "#";
    } else {
        $s1 = "##";
    }
    return $s1;
}

echo test("Hello") . "\n";
echo test("Python") . "\n";
echo test("a") . "\n";
echo test(" ") . "\n";
