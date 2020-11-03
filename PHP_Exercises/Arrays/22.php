Viết một tập lệnh PHP để sắp xếp một mảng bằng cách sử dụng thứ tự tự nhiên không phân biệt chữ hoa chữ thường

<?php
$colors = array(
    "color1", "color20", "color3", "color2"
);
sort($colors, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($colors as $key => $val) {
    echo "Colors[" . $key . "] = " . $val . "\n";
}
//Colors[0] = color1 Colors[1] = color2 Colors[2] = color3 Colors[3] = color20
?>

SORT_NATURAL - So sánh các phần tử dưới dạng chuỗi sử dụng "thứ tự tự nhiên" như natsort ()
SORT_FLAG_CASE - Có thể được kết hợp (theo từng bit HOẶC) với SORT_STRING hoặc SORT_NATURAL
để sắp xếp các chuỗi không phân biệt chữ hoa chữ thường