Viết một tập lệnh PHP để lấy giá trị cuối cùng của một mảng mà không ảnh hưởng đến con trỏ.

<?php
$colors = array('c1' => 'Red',  'c2' => 'Green',  'c3' => 'White',  'c4' => 'Black');
echo next($colors) . "\n";
$last = array_pop(array_keys(array_flip($colors)));
echo $last . "\n";
echo current($colors) . "\n";
?>