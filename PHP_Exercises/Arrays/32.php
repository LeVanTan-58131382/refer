Viết một hàm PHP để tìm kiếm một giá trị được chỉ định trong các giá trị của một mảng kết hợp

<?php
function arraysearch($arra1, $search)
{
    reset($arra1);
    while (list($key, $val) = each($arra1)) {
        if (preg_match("/$search/i", $val)) {
            echo $search . " has found in " . $key . "\n";
        } else {
            echo $search . " has not found in " . $key . "\n";
        }
    }
}
$exercises = array("part1" => "PHP array", "part2" => "PHP String", "part3" => "PHP Math");
arraysearch($exercises, "Math");
?>