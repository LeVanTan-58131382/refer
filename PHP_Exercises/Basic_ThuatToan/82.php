Viết chương trình PHP để tạo một chuỗi mới bằng cách sử dụng 3 bản sao của 2 ký tự đầu tiên của một chuỗi đã cho.
Nếu độ dài của chuỗi đã cho nhỏ hơn 2 thì sử dụng cả chuỗi.
Đầu vào mẫu:
"abc"
"Python"
"J"
Đầu ra mẫu:
ababab
PyPyPy
JJJ

<?php
function test($s1)
{
    $extra_Front = "";

    if (strlen($s1) < 2) {
        return $s1 . $s1 . $s1;
    } else {
        $extra_Front = substr($s1, 0, 2);
        return $extra_Front . $extra_Front . $extra_Front;
    }
}

echo test("abc") . "\n";
echo test("Python") . "\n";
echo test("J") . "\n";
