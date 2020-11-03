Viết chương trình PHP để tạo một chuỗi mới là n (số nguyên không âm) bản sao của một chuỗi đã cho.
Đầu vào mẫu:
"JS", 2
"JS", 3
"JS", 1
Đầu ra mẫu:
JSJS
JSJSJS
JS

<?php
function test($s, $n)
{
    $result = "";
    for ($i = 0; $i < $n; $i++) {
        $result = $result . $s;
    }
    return $result;
}


echo test("JS", 2) . "\n";
echo test("JS", 3) . "\n";
echo test("JS", 1) . "\n";
