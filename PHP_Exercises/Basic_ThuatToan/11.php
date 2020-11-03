Viết chương trình PHP để tạo một chuỗi mới lấy 3 ký tự đầu tiên của một chuỗi đã cho
và trả về chuỗi có thêm 3 ký tự ở cả phía trước và phía sau. Nếu độ dài chuỗi đã cho nhỏ hơn 3,
hãy sử dụng bất kỳ ký tự nào ở đó.
Đầu vào mẫu:
"Python"
"JS"
"Mã"
Đầu ra mẫu:
PytPythonPyt
JSJSJS
CodCodeCod

<?php
function test($str)
{
    if (strlen($str) < 3) {
        return $str . $str . $str;
    } else {
        $front = substr($str, 0, 3);
        return $front . $str . $front;
    }
}
echo test("Python") . "\n";
echo test("JS") . "\n";
echo test("Code") . "\n";
