Viết một chương trình PHP để chèn một chuỗi đã cho vào giữa một chuỗi đã cho khác có độ dài 4.
Đầu vào mẫu:
"[[]]","Xin chào"
"(())", "Chào"
Đầu ra mẫu:
[[Xin chào]]
((Chào))

<?php
function test($s1, $word)
{
    return substr($s1, 0, 2) . $word . substr($s1, 2);
}

echo test("[[]]", "Hello") . "\n";
echo test("(())", "Hi");
