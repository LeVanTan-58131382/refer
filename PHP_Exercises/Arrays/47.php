Viết một chương trình PHP để lọc ra một số phần tử có tên khóa nhất định.
Dữ liệu thử nghiệm:
Mảng thứ nhất: ('c1' => 'Đỏ', 'c2' => 'Xanh', 'c3' => 'Trắng', c4 => 'Đen')
Mảng thứ 2: ('c2', 'c4')
Đầu ra:
Mảng
(
[c1] => Đỏ
[c3] => Trắng
)

<?php
$first_array = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
$second_array = array('c2', 'c4');
$result = array_diff_key($first_array, array_flip($second_array));
print_r($result);
?>