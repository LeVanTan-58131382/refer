Viết một chương trình PHP để lấy chênh lệch tuyệt đối giữa n và 51.
Nếu n lớn hơn 51 thì trả về gấp ba lần chênh lệch tuyệt đối.
Đầu vào mẫu:
53
30
51
Đầu ra mẫu:
6
21
0

<?php
function test($n)
{
    $x = 51;

    if ($n > $x) {
        return ($n - $x) * 3;
    }
    return $x - $n;
}
echo test(53) . "\n";
echo test(30) . "\n";
echo test(51) . "\n";
