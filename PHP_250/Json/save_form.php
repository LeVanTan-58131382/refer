<?php

if (isset($_POST["ten"]) && isset($_POST["tuoi"])) {
    if (file_exists("json_file/my_2020-10-12.json")) {
        $current_data = file_get_contents("json_file/my_2020-10-12.json");

        $array_data = json_decode($current_data, true);

        $new_data = array(
            "ten" => $_POST["ten"],
            "tuoi" => $_POST["tuoi"]
        );

        $array_data[] = $new_data;

        $json_data = json_encode($array_data, JSON_PRETTY_PRINT);

        if (file_put_contents("json_file/my_2020-10-12.json", $json_data)) {
            echo "Lưu dữ liệu vào file json thành công";
        } else {
            echo "Lưu dữ liệu thất bại";
        }
    } else {
        echo "<h4>Hãy nhập đầy đủ thông tin vào các trường yêu cầu</h4>";
    }
} else {
    echo "File JSON không tồn tại";
}
