<?php

$str = "Hello";

echo "The String: " . $str . "<br><br>";

echo "md5 (Kiểu Binary): " . md5($str, TRUE) . "<br><br>";

echo "md5 (Kiểu HEX: )" . md5($str) . "<br><br>";

echo "sha1 (Kiểu Binary): " . sha1($str, TRUE) . "<br><br>";

echo "sha1 (Kiểu HEX: )" . sha1($str) . "<br><br>";


if (md5($str) == "8b1a9953c4611296a827abf8c47804d7") {
    echo "Password chính xác";
}

$pass = sha1("admin@gmail.com12345678Aa");
echo $pass;
