Viết một chương trình PHP để tạo một chuỗi mới từ một chuỗi nhất định không có ký tự đầu tiên
và cuối cùng nếu ký tự đầu tiên hoặc cuối cùng là 'a', nếu không thì trả về chuỗi đã cho ban đầu.
Sample Input:
"abcab"
"python"
"abcda"
"jython"
Sample Output:
bcab
Python
bcd
jython

<?php
function test($s1)
{
    if (strlen($s1) > 0 && substr($s1, strlen($s1) - 1, 1) == "a") {
        $s1 = substr($s1, 0, strlen($s1) - 1);
    }

    if (strlen($s1) > 0 && substr($s1, 0, 1) == "a") {
        $s1 = substr($s1, 1);
    }

    return $s1;
}


echo test("abcab") . "\n";
echo test("Python") . "\n";
echo test("abcda") . "\n";
echo test("jython") . "\n";
