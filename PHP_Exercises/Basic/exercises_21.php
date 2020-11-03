Viết một tập lệnh PHP để lấy URL đầy đủ

<?php
    $full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    echo $full_url."\n";
?>