Viết tập lệnh PHP để tính toán và hiển thị nhiệt độ trung bình, năm nhiệt độ thấp nhất và cao nhất.
Nhiệt độ ghi: 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62,
62, 65 , 64, 68, 73, 75, 79, 73
Đầu ra mong đợi:
Nhiệt độ trung bình là: 70,6
Danh sách bảy nhiệt độ thấp nhất: 60, 62, 63, 63, 64,
Danh sách bảy nhiệt độ cao nhất: 76, 78, 79, 81, 85,

<?php
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
    68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach ($temp_array as $temp) {
    $tot_temp += $temp;
}
$avg_high_temp = $tot_temp / $temp_array_length;
echo "Average Temperature is : " . $avg_high_temp . "
    ";
sort($temp_array);
echo " List of five lowest temperatures :";
for ($i = 0; $i < 5; $i++) {
    echo $temp_array[$i] . ", ";
}
echo "List of five highest temperatures :";
for ($i = ($temp_array_length - 5); $i < ($temp_array_length); $i++) {
    echo $temp_array[$i] . ", ";
}
?>

Hàm explode() Ngắt một chuỗi thành một mảng