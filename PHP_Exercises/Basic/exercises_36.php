Viết chương trình PHP để lấy kích thước của tệp

<?php
    $myfile = fopen("/home/students/ppp.txt", "w") or die("Unable to open file!");
    $txt = "PHP Exercises\n";
    fwrite($myfile, $txt);
    $txt = "from\n";
    fwrite($myfile, $txt);
    $txt = "w3resource\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    echo "Size of the file: ".filesize("/home/students/ppp.txt")."\n";
?>