Viết một tập lệnh PHP để lấy tên tệp hiện tại:

<?php
    $current_file_name = basename($_SERVER['PHP_SELF']);
    echo "Tên tệp hiện tại là: " . $current_file_name."\n";
?>