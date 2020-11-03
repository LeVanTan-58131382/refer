Viết chương trình PHP để so sánh hai chuỗi đã cho và trả về số vị trí mà chúng chứa 2 chuỗi con có cùng độ dài.
Đầu vào mẫu:
"abcdefgh", "abijsklm"
"abcde", "osuefrcd"
"pqrstuvwx", "pqkdiewx"
Đầu ra mẫu:
1
1
2

<?php
function test($s1, $s2)
{
    $ctr = 0;
    for ($i = 0; $i < strlen($s1) - 1; $i++) {
        $firstString = substr($s1, $i, 2);
        for ($j = 0; $j < strlen($s2) - 1; $j++) {
            $secondString = substr($s2, $j, 2);
            if ($firstString == $secondString)
                $ctr++;
        }
    }
    return $ctr;
}

echo (test("abcdefgh", "abijsklm")) . "\n";
echo (test("abcde", "osuefrcd")) . "\n";
echo (test("pqrstuvwx", "pqkdiewx")) . "\n";
