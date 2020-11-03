Viết chương trình PHP để tạo một chuỗi mới từ một chuỗi đã cho. Nếu ký tự đầu tiên hoặc
hai ký tự đầu tiên là 'a', hãy trả về chuỗi không có các ký tự 'a' đó, nếu không thì trả
về chuỗi đã cho ban đầu.
Sample Input:
"abcab"
"python"
"aacda"
"jython"
Sample Output:
bcab
Python
cda
jython

<?php
function test($s1)
{
    if (strlen($s1) == 1 && substr($s1, 0, 1) == "a") {
        $s1 = substr($s1, 1);
    }

    if (strlen($s1) > 1) {
        if (substr($s1, 1, 1) == "a") {
            $s1 = substr($s1, 0, 1) . substr($s1, 2);
        }

        if (substr($s1, 0, 1) == "a") {
            $s1 = substr($s1, 1);
        }
    }

    return $s1;
}

echo test("abcab") . "\n";
echo test("Python") . "\n";
echo test("aacda") . "\n";
echo test("jython") . "\n";
