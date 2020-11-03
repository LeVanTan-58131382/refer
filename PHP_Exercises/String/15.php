Viết một tập lệnh PHP để xóa một phần của chuỗi ngay từ đầu.
Chuỗi mẫu: 'rayy@example.com'
Đầu ra mong đợi: 'example.com'

<?php
$sub_string = 'rayy@';
$str = 'rayy@example.com';
if (substr($str, 0, strlen($sub_string)) == $sub_string) {
    $str = substr($str, strlen($sub_string));
}
echo $str . "\n";
?>