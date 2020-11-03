$ x = array (1, 2, 3, 4, 5);
Xóa một phần tử khỏi mảng PHP trên. Sau khi xóa phần tử, các khóa số nguyên phải được chuẩn hóa.
Đầu ra mẫu:
mảng (5) {[0] => int (1) [1] => int (2) [2] => int (3) [3] => int (4) [4] => int (5) }
mảng (4) {[0] => int (1) [1] => int (2) [2] => int (3) [3] => int (5)}


<?php
$x = array(1, 2, 3, 4, 5);
var_dump($x);
unset($x[3]);
$x = array_values($x);
echo '
    ';
var_dump($x);
?>