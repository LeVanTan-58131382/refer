Viết một tập lệnh PHP để nhận một mảng chứa tất cả các mục của một mảng có các khóa có trong một mảng khác.
Dữ liệu thử nghiệm: Mảng thứ nhất: ('c1' => 'Đỏ', 'c2' => 'Xanh lá cây', 'c3' => 'Trắng', c4 => 'Đen')
Mảng thứ 2: ('c2', 'c4')
Đầu ra:
Mảng
(
[c2] => Xanh lục
[c4] => Đen
)


<?php
$first_array = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
$second_array = array('c2', 'c4');
print_r(array_intersect_key($first_array, array_flip($second_array)));
?>