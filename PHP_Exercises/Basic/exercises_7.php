Viết một tập lệnh PHP, tập lệnh này sẽ trả về các thành phần sau của url 'https://www.w3resource.com/php-exercises/php-basic-exercises.php'.
List of components : Scheme, Host, Path

Expected Output :
Scheme : http
Host : www.w3resource.com
Path : /php-exercises/php-basic-exercises.php

<?php
    $url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
    $url=parse_url($url);
    echo "<br> Kết quả là: ";
    echo 'Scheme : '.$url['scheme']."\n";
    echo 'Host : '.$url['host']."\n";
    echo 'Path : '.$url['path']."\n";
?>

