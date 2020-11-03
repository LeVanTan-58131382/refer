Viết tập lệnh PHP để xóa (các) dấu phẩy khỏi chuỗi số sau.
Chuỗi mẫu: '2,543,12'
Sản lượng mong đợi: 2543,12

<?php
$str1 = "2,543.12";
$x = str_replace(',', '', $str1);
if (is_numeric($x)) {
    echo $x . "\n";
}
?>