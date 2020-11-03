<?php
$conn = mysqli_connect("localhost", "root", "", "test_ajax_php250") or die("Could not connect");

$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed");

$output = mysqli_fetch_all($result, MYSQLI_ASSOC);

$json_data = json_encode($output, JSON_PRETTY_PRINT);

$file_name = "my_" . date("Y-m-d") . ".json";

if (file_put_contents("json_file/{$file_name}", $json_data)) {
    echo "Tạo thành công file " . $file_name;
} else {
    echo "Không thể Insert dữ liệu vào file JSON";
}
