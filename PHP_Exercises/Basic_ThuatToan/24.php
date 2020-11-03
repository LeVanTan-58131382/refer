Viết chương trình PHP để chuyển 3 ký tự cuối cùng của một chuỗi cho trước sang dạng chữ hoa.
Nếu độ dài của chuỗi nhỏ hơn 3 thì viết hoa tất cả các ký tự.
Đầu vào mẫu:
"Python"
"Javascript"
"js"
"PHP"
Đầu ra mẫu:
PytHON
JavascrIPT
JS
PHP

<?php
function test($s)
{
    return strlen($s) < 3 ? strtoupper($s) : substr($s, 0, strlen($s) - 3) . strtoupper(substr($s, strlen($s) - 3));
}


echo test("Python") . "\n";
echo test("Javascript") . "\n";
echo test("js") . "\n";
echo test("PHP") . "\n";
