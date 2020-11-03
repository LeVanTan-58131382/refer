Viết một tập lệnh PHP để lấy đường dẫn thư mục được sử dụng cho các tệp tạm thời.

<?php
    // Create a temporary file in the temporary 
    // files directory using sys_get_temp_dir()
    $temp_file = tempnam(sys_get_temp_dir(), 'Tux');
    echo $temp_file."\n";        // C:\Users\TANLE\AppData\Local\Temp\TuxE502.tmp
?>