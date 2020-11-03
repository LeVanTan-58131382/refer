Viết một chương trình PHP để lấy một mảng đã sắp xếp mà không bảo toàn các khóa

<?php
$my_array = array("red", "black", "green", "black", "white", "yellow");

$sorted_unique_array = array_values(array_unique($my_array));

print_r($sorted_unique_array);
?>