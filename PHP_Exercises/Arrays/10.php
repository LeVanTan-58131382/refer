Viết chương trình PHP để hợp nhất (theo chỉ mục) hai mảng sau.
Mảng mẫu:
$ array1 = array (array (77, 87), array (23, 45));
$ array2 = array ("w3resource", "com");
Đầu ra mong đợi:

Mảng
(
[0] => Mảng
(
[0] => w3resource
[1] => 77
[2] => 87
)
[1] => Mảng
(
[0] => com
[1] => 23
[2] => 45
)
)

<?php
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");
function merge_arrays_by_index($x, $y)
{
    $temp = array();
    $temp[] = $x;
    if (is_scalar($y)) {
        $temp[] = $y;
    } else {
        foreach ($y as $k => $v) {
            $temp[] = $v;
        }
    }
    return $temp;
}
echo '<pre>';
print_r(array_map('merge_arrays_by_index', $array2, $array1));
?>

Hàm is_scalar () kiểm tra xem một biến có phải là biến vô hướng hay không.

Hàm này trả về true (1) nếu biến là một đại lượng vô hướng, nếu không, nó trả về false / nothing.

Số nguyên, float, string hoặc boolean có thể là các biến vô hướng. Mảng, đối tượng và resource thì không.