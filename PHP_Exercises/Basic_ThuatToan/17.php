Viết một chương trình PHP để kiểm tra xem chuỗi 'yt' có xuất hiện ở chỉ mục 1
trong một chuỗi nhất định hay không. Nếu nó xuất hiện, hãy trả về một chuỗi không có 'yt',
ngược lại trả về chuỗi ban đầu.
Đầu vào mẫu:
"Python"
"ytade"
"jsues"
Đầu ra mẫu:
Phon
ytade
jsues

<?php
function test($s)
{
    return substr($s, 1, 2) == "yt" ? substr($s, 0, 1) . substr($s, 3, strlen($s) - 2) : $s;
}

echo test("Python") . "\n";
echo test("ytade") . "\n";
echo test("jsues") . "\n";
