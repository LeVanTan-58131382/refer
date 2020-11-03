Viết một hàm PHP để tạo mật khẩu ngẫu nhiên (chứa chữ hoa, chữ thường, số và khác) bằng cách sử dụng hàm shuffle ()

<?php
function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2)
{

    $pass_order = array();
    $passWord = '';

    //Create contents of the password 
    for ($i = 0; $i < $upper; $i++) {
        $pass_order[] = chr(rand(65, 90));
    }
    for ($i = 0; $i < $lower; $i++) {
        $pass_order[] = chr(rand(97, 122));
    }
    for ($i = 0; $i < $numeric; $i++) {
        $pass_order[] = chr(rand(48, 57));
    }
    for ($i = 0; $i < $other; $i++) {
        $pass_order[] = chr(rand(33, 47));
    }

    //using shuffle() to shuffle the order
    shuffle($pass_order);

    //Final password string 
    foreach ($pass_order as $char) {
        $passWord .= $char;
    }
    return $passWord;
}
echo "\n" . "Generated Password : " . rand_Pass() . "\n";
?>

Hàm chr() : Trả về các ký tự từ các giá trị ASCII khác nhau

Ví dụ:
<?php
echo chr(52) . "<br>"; // Decimal value // 4
echo chr(052) . "<br>"; // Octal value  // *
echo chr(0x52) . "<br>"; // Hex value   // R
?>