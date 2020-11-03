Viết chương trình PHP để tạo một chuỗi ký tự mới tại các chỉ mục 0,1,4,5,8,9 ... từ một chuỗi đã cho.
Đầu vào mẫu:
"Python"
"JavaScript"
"HTML"
Đầu ra mẫu:
Pyon
JaScpt
HT

<?php
function test($s)
{
    $result = "";
    for ($i = 0; $i < strlen($s); $i = $i + 4) {
        $c = $i + 2;
        $n = 0;
        $z = $c > strlen($s) ? 1 : 2;
        $n = $n + $z;
        $result = $result . substr($s, $i, $n);
    }
    return $result;
}

echo (test("Python")) . "\n";
echo (test("JavaScript")) . "\n";
echo (test("HTML")) . "\n";
