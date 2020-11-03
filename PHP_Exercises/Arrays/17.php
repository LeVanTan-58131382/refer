Viết một tập lệnh PHP để in "thứ hai" và Màu đỏ từ mảng sau.
Dữ liệu mẫu :
$ color = array ("color" => array ("a" => "Red", "b" => "Green", "c" => "White"),
"số" => mảng (1, 2, 3, 4, 5, 6),
"lỗ" => mảng ("Đầu tiên", 5 => "Thứ hai", "Thứ ba"));

<?php
$color = array(
    "color" => array("a" => "Red", "b" => "Green", "c" => "White"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes" => array("First", 5 => "Second", "Third")
);
echo $color["holes"][5] . "\n"; // prints "second"
echo $color["color"]["a"] . "\n"; // prints "Red"
?>