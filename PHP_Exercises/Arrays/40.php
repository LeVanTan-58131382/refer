Viết một hàm PHP để tìm các giá trị duy nhất từ ​​các mảng nhiều chiều và làm phẳng chúng ở độ sâu bằng không

<?php
function array_flat($my_array)
{
    $fa = array();
    $l = 0;
    foreach ($my_array as $k => $v) {
        if (!is_array($v)) {
            $fa[] = $v;

            continue;
        }
        $l++;
        $fa = array_flat($v, $fa, $l);
        $l--;
    }

    if ($l == 0) $fa = array_values(array_unique($fa));
    return $fa;
}
$tmp = array('a' => array(-1, -2, 0, 2, 3), 'b' => array('c' => array(-1, 0, 2, 0, 3)));
print_r(array_flat($tmp));
?>