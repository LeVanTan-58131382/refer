Viết một hàm PHP để so sánh hai mảng nhiều chiều và trả về sự khác biệt

<?php
function key_compare($a, $b)
{
    if ($a === $b)
        return 0;
    return ($a > $b) ? 1 : -1;
}
function multidimenssional_array_diff($arr1, $arr2)
{
    return array_diff_uassoc($arr1['c'], $arr2['c'], "key_compare");
}
//multidimenssional arrays
$color1 = array('a' => 'White', 'b' => 'Red', 'c' => array('a' => 'Green', 'b' => 'Blue', 'c' => 'Yellow'));
$color2 = array('a' => 'White', 'b' => 'Red', 'c' => array('a' => 'White', 'b' => 'Red', 'c' => 'Yellow'));
print_r(multidimenssional_array_diff($color1, $color2));
?>