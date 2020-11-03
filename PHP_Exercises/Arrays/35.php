Viết một tập lệnh PHP thành chữ thường và chữ hoa, tất cả các phần tử trong một mảng

<?php
$colors = array("Red", "Green", "Black", "White");
print_r($colors);

$lower_colors = array_map('strtolower', $colors);
print_r($lower_colors);
$upper_colors = array_map('strtoupper', $colors);
print_r($upper_colors);
?>