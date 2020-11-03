Viết chương trình PHP để tạo một chuỗi mới sử dụng hai chuỗi s1, s2 đã cho,
định dạng của chuỗi mới sẽ là s1s2s2s1.
Đầu vào mẫu:
"Hi", "Hello"
"whats", "app"
Đầu ra mẫu:
HiHelloHelloHi
whatsappappwhats

<?php
function test($s1, $s2)
{
    return $s1 . $s2 . $s2 . $s1;
}

echo test("Hi", "Hello") . "\n";
echo test("whats", "app");
