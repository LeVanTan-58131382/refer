Viết một tập lệnh PHP để in phiên bản PHP hiện tại.

Lưu ý: Không sử dụng hàm phpinfo ().

<?php
    echo 'Current PHP version : ' . phpversion();
        // prints e.g. '2.0' or nothing if the extension isn't enabled
    echo phpversion('tidy')."\n";
?>