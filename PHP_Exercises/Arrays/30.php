Viết một chương trình PHP để lấy chỉ mục của giá trị cao nhất trong một mảng kết hợp

<?php
$x = array(
    'value1' => 3021,
    'value2' => 2365,
    'value3' => 5215,
    'value4' => 5214,
    'value5' => 2145
);
reset($x);   // optional.
arsort($x);
$key_of_max = key($x);
echo "Index of the highest value : " . $key_of_max . "\n";
?>