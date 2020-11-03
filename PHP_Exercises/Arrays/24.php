Viết một hàm PHP để xáo trộn một mảng kết hợp, bảo toàn các cặp khóa, giá trị.

<?php
function shuffle_assoc($my_array)
{
    $keys = array_keys($my_array);

    shuffle($keys);

    foreach ($keys as $key) {
        $new[$key] = $my_array[$key];
    }

    $my_array = $new;

    return $my_array;
}

$colors = array("color1" => "Red", "color2" => "Green", "color3" => "Yellow");

print_r(shuffle_assoc($colors));
?>