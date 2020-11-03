Viết chương trình PHP để tạo một chuỗi như "aababcabcd" từ một chuỗi "abcd" đã cho.
Đầu vào mẫu:
"A B C D"
"abc"
"a"
Đầu ra mẫu:
aababcabcd
aababc
a

<?php
function test($s)
{
    $result = "";
    for ($i = 0; $i < strlen($s); $i++) {
        $result = $result . substr($s, 0, $i + 1);
    }
    return $result;
}

echo test("abcd") . "\n";
echo test("abc") . "\n";
echo test("a") . "\n";
