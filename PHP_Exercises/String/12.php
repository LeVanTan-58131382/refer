Viết một tập lệnh PHP để đặt một chuỗi vào một mảng
Sample strings : "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,
\nLike a diamond in the sky.";
Expected Result (using var_dump()) : array(4) { [0]=> string(30) "Twinkle, twinkle, little star,"
[1]=> string(26) "How I wonder what you are."[2]=> string(27) "Up above the world so high,"
[3]=> string(26) "Like a diamond in the sky." }

<?php
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("<br>", $str);
var_dump($arra1);
?>