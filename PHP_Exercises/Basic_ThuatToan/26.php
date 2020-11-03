Viết chương trình PHP để tạo một chuỗi mới là n (số nguyên không âm) bản sao của 3 ký tự đầu tiên của một chuỗi đã cho.
Nếu độ dài của chuỗi đã cho nhỏ hơn 3 thì trả về n bản sao của chuỗi.
Đầu vào mẫu:
"Python", 2
"Python", 3
"JS", 3
Đầu ra mẫu:
PytPyt
PytPytPyt
JSJSJS

<?php
function test($s, $n)
{
    $result = "";
    $frontOfString = 3;

    if ($frontOfString > strlen($s))
        $frontOfString = strlen($s);

    $front = substr($s, 0, $frontOfString);

    for ($i = 0; $i < $n; $i++) {
        $result = $result . $front;
    }
    return $result;
}


echo test("Python", 2) . "\n";
echo test("Python", 3) . "\n";
echo test("JS", 3) . "\n";
