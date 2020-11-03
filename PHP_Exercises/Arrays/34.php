Viết một tập lệnh PHP để cắt tất cả các phần tử trong một mảng bằng cách sử dụng hàm array_walk

<?php
$colors = array("Red ", " Green", "Black ", " White ");
print_r($colors);
array_walk($colors, create_function('&$val', '$val = trim($val);'));
print_r($colors);
?>