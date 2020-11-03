Viết một tập lệnh PHP để chuyển đổi một chuỗi thành Date và DateTime.

<?php
    $dt = DateTime::createFromFormat('m-d-Y', '12-08-2004')->format('Y-m-d');
    echo $dt;
?>