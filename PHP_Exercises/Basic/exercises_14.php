Viết một tập lệnh PHP để lấy thông tin sửa đổi cuối cùng của một tệp.
Tên tệp mẫu: php-basic-works.php
Đầu ra mẫu: Sửa đổi lần cuối Thứ Hai, ngày 26 tháng 6 năm 2017, 12:43 chiều

<?php
    $current_file_name = basename($_SERVER['PHP_SELF']);
    $file_last_modified = filemtime($current_file_name); 
    echo "Last modified " . date("l, dS F, Y, h:ia", $file_last_modified)."\n";
?>