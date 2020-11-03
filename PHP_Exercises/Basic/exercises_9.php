Viết một tập lệnh PHP, để kiểm tra xem trang được gọi từ 'https' hay 'http'.

<?php
    if (!empty($_SERVER['HTTPS'])) 
        {
            echo 'https is enabled';
        }
    else
        {
            echo 'http is enabled'."\n";
        }
?>