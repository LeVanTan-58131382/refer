Viết một đoạn mã PHP để kiểm tra xem một chuỗi có chứa một chuỗi cụ thể hay không?
Chuỗi mẫu: 'Con cáo nâu nhanh nhẹn nhảy qua con chó lười biếng.'
Kiểm tra xem chuỗi đã nói có chứa chuỗi 'nhảy' hay không.

<?php
$str1 = 'Con cáo nâu nhanh nhẹn nhảy qua con chó lười biếng.';
if (strpos($str1, 'nhảy') !== false) {
    echo 'Có từ này tồn tại trong chuỗi trên.';
    echo strpos($str1, 'nhảy'); // 27 - vị trí xuất hiện
} else {
    echo 'Từ này không tồn tại trong chuỗi trên.';
}
?>

Hàm strpos () tìm vị trí xuất hiện đầu tiên của một chuỗi bên trong một chuỗi khác.