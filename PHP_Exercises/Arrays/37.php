Viết chương trình PHP để loại bỏ các giá trị trùng lặp khỏi một mảng chỉ chứa chuỗi hoặc chỉ số nguyên

<?php
$colors = array(
    0 => 'Red',
    1 => 'Green',
    2 => 'White',
    3 => 'Black',
    4 => 'Red',
);

$numbers = array(
    0 => 100,
    1 => 200,
    2 => 100,
    3 => -10,
    4 => -10,
    5 => 0,
);
$uniq_colors = array_keys(array_flip($colors));
$uniq_numbers = array_keys(array_flip($numbers));
print_r($uniq_colors);
print_r($uniq_numbers);
?>