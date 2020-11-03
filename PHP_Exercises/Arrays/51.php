Viết một tập lệnh PHP để tạo một mảng hai chiều (4x4), được khởi tạo thành 10

<?php
$a = array_fill(0, 4, array_fill(0, 4, 10));
print_r($a);
?>