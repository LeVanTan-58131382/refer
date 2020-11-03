Viết một tập lệnh PHP để chuyển đổi giá trị của một biến PHP thành chuỗi.

<?php
$x =  20;            // $x is an integer
$str1 = (string)$x; // $str1 is a string now
// Check whether $x and $str1 are equal or not
if ($x === $str1) {
    echo "Chúng không giống nhau" . "\n";
} else {
    echo "Chúng giống nhau" . "\n";
}

// Kết quả : Chúng không giống nhau vì $x là số còn $str1 là chuỗi
?>