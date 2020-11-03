Viết một chương trình PHP để kiểm tra xem sự xuất hiện đầu tiên của "a" trong một chuỗi nhất định
có ngay sau đó là một "a" khác hay không.
Đầu vào mẫu:
"caabb"
"babaaba"
"aaaaa"
Đầu ra mẫu:
bool (true)
bool (sai)
bool (true)

<?php
function test($s)
{
    $counter = 0;
    for ($i = 0; $i < strlen($s) - 1; $i++) {
        if (substr($s, $i, 1) == 'a') $counter++;
        if ((substr($s, $i, 2) == 'aa') && $counter < 2)
            return true;
    }
    return false;
}

var_dump(test("caabb"));
var_dump(test("babaaba"));
var_dump(test("aaaaa"));
