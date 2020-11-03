Viết một tập lệnh PHP để xóa một giá trị cụ thể khỏi một mảng bằng cách sử dụng hàm array_filter ()

<?php
$colors = array('key1' => 'Red', 'key2' => 'Green', 'key3' => 'Black');
$given_value = 'Black';
print_r($colors);

$new_filtered_array = array_filter($colors, function ($element) use ($given_value) {
    return ($element != $given_value);
});
print_r($filtered_array);

print_r($new_filtered_array);
?>