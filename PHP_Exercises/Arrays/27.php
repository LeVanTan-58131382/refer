Viết chương trình PHP để tạo một mảng với một phạm vi được lấy từ một chuỗi

<?php
function string_range($str1)
{
    preg_match_all("/([0-9]{1,2})-?([0-9]{0,2}) ?,?;?/", $str1, $a);
    $x = array();
    foreach ($a[1] as $k => $v) {
        $x  = array_merge($x, range($v, (empty($a[2][$k]) ? $v : $a[2][$k])));
    }
    return ($x);
}
$test_string = '1-2 18-20 9-11';
print_r(string_range($test_string));
?>

Hàm preg_match_all() Tìm tất cả các lần xuất hiện của "ain" trong một chuỗi

Ví dụ
<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
if (preg_match_all($pattern, $str, $matches)) {
    print_r($matches);
}
?>
Array
(
[0] => Array
(
[0] => ain
[1] => AIN
[2] => ain
[3] => ain
)
)