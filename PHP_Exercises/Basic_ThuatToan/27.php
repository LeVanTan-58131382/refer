Viết chương trình PHP để đếm chuỗi "aa" trong một chuỗi đã cho và giả sử "aaa" chứa hai "aa".
Đầu vào mẫu:
"bbaaccaag"
"jjkiaaasew"
"JSaaakoiaa"
Đầu ra mẫu:
2
2
3

<?php
function test($s)
{
    $ctr_aa = 0;
    for ($i = 0; $i < (strlen($s) - 1); $i++) {
        if (substr($s, $i, 2) == "aa") {
            $ctr_aa++;
        }
    }
    return $ctr_aa;
}


echo test("bbaaccaag") . "\n";
echo test("jjkiaaasew") . "\n";
echo test("JSaaakoiaa") . "\n";
