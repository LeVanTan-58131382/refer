Viết chương trình PHP để tạo một chuỗi mới lấy ký tự đầu tiên từ một chuỗi đã cho và ký tự cuối cùng
từ một chuỗi đã cho khác. Nếu độ dài của bất kỳ chuỗi đã cho nào là 0, hãy sử dụng '#' làm ký tự còn thiếu.
Sample Input:
"Hello", "Hi"
"Python", "PHP"
"JS", "JS"
"Csharp", ""
Sample Output:
Hi
PP
JS
C#

<?php
function test($s1, $s2)
{
    $lastChars = "";

    if (strlen($s1) > 0) {
        $lastChars = $lastChars . substr($s1, 0, 1);
    } else {
        $lastChars = $lastChars . "#";
    }

    if (strlen($s2) > 0) {
        $lastChars = $lastChars . substr($s2, strlen($s2) - 1);
    } else {
        $lastChars = $lastChars . "#";
    }

    return $lastChars;
}


echo test("Hello", "Hi") . "\n";
echo test("Python", "PHP") . "\n";
echo test("JS", "JS") . "\n";
echo test("Csharp", "") . "\n";
