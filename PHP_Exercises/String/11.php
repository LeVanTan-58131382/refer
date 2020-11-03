Viết một tập lệnh PHP để tìm ký tự đầu tiên khác nhau giữa hai chuỗi.
Chuỗi1: 'football'
String2: 'footboll'
Kết quả mong đợi: Sự khác biệt đầu tiên giữa hai chuỗi ở vị trí 5: "a" so với "o"

<?php
$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf(
    'First difference between two strings at position %d: "%s" vs "%s"',
    $str_pos,
    $str1[$str_pos],
    $str2[$str_pos]
);
printf("\n");
?>

Hàm strspn () trả về số lượng ký tự được tìm thấy trong chuỗi chỉ chứa các ký tự từ tham số charlist.