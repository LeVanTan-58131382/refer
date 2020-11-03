Viết một kịch bản phát hiện trình duyệt PHP đơn giản. Đi tới trình chỉnh sửa
Đầu ra mẫu: Tác nhân người dùng của bạn là: Mozilla / 5.0 (Windows NT 6.1) AppleWebKit / 537.36 (KHTML, như Gecko) Chrome / 35.0.1916.114 Safari / 537.36

<?php
    echo "<br>" . "Tác nhân Người dùng của bạn là :" . $_SERVER ['HTTP_USER_AGENT'];
?>