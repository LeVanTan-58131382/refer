Viết một chương trình PHP để tạo một chuỗi mới bằng cách sử dụng ba bản sao của hai ký tự cuối cùng của một chuỗi có độ dài ít nhất là hai. Đi tới trình chỉnh sửa
Đầu vào mẫu:
"Hello"
"Hi"
Đầu ra mẫu:
lololo
HiHiHi

<?php
function test($s1)
{
    $last2 = substr($s1, strlen($s1) - 2);
    return $last2 . $last2 . $last2;
}

echo test("Hello") . "\n";
echo test("Hi");
