Viết một hàm PHP để nhận một mảng có khóa và giá trị đầu tiên

<?php
function array_1st_element($my_array)
{
    list($k) = array_keys($my_array);
    $result  = array($k => $my_array[$k]);
    unset($my_array[$k]);
    return $result;
}
$colors = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'Black');
print_r(array_1st_element($colors));
?>