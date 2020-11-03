Viết một chương trình PHP để kiểm tra xem một chuỗi đã cho có chứa từ 2 đến 4 ký tự 'z' hay không.
Đầu vào mẫu:
"frizz"
"zane"
"Zazz"
"sai"
Đầu ra mẫu:
bool (true)
bool (sai)
bool (true)
bool (sai)

<?php
function test($s)
{
    $ctr = 0;

    for ($i = 0; $i < strlen($s); $i++) {
        if (substr($s, $i, 1) == 'z') {
            $ctr++;
        }
    }

    return $ctr > 1 && $ctr < 4;
}

var_dump(test("frizz"));
var_dump(test("zane"));
var_dump(test("Zazz"));
var_dump(test("false"));
