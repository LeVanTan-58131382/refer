Viết một chương trình PHP để tạo một chuỗi mới của nửa đầu của một chuỗi có độ dài chẵn cho trước.
Đầu vào mẫu:
"Hello"
"Hi"
Sample Output:
He
H

<?php
function test($s1)
{
    return substr($s1, 0, strlen($s1) / 2);
}

echo test("Hello") . "\n";
echo test("Hi") . "\n";
