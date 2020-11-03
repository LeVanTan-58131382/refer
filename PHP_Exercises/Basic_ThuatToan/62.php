Viết chương trình PHP để tạo một chuỗi mới bằng cách sử dụng hai ký tự đầu tiên của một chuỗi đã cho.
Nếu độ dài chuỗi nhỏ hơn 2 thì trả về chuỗi ban đầu.
Sample Input:
"Hello"
"Hi"
"H"
" "
Sample Output:
He
Hi
H

<?php
function test($s1)
{
    if (strlen($s1) < 2) {
        return $s1;
    } else {
        return substr($s1, 0, 2);
    }
}
echo test("Hello") . "\n";
echo test("Hi") . "\n";
echo test("H") . "\n";
echo test("  ") . "\n";
