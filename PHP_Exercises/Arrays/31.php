Viết chương trình PHP để lấy phần mở rộng của tệp

<?php
function file_extension($str1)
{
    $str1 = implode("", explode("\\", $str1));
    $str1 = explode(".", $str1);
    $str1 = strtolower(end($str1));
    return $str1;
}

$file = 'example.txt';
echo "\n" . file_extension($file) . "\n";
?>