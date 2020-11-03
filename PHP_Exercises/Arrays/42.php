Viết một hàm PHP để kiểm tra xem tất cả các giá trị mảng có phải là chuỗi hay không

<?php
function check_strings_in_array($arr)
{
    return array_sum(array_map('is_string', $arr)) == count($arr);
}
$arr1 = array('PHP', 'JS', 'Python');
$arr2 = array('SQL', 200, 'MySQL');
var_dump(check_strings_in_array($arr1));
var_dump(check_strings_in_array($arr2));
?>