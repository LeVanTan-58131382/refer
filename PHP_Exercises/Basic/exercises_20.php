Viết một hàm PHP để kiểm tra xem một số có lớn hơn 30, 20 hoặc 10 hay không bằng cách sử dụng toán tử bậc ba.

<?php
    function trinary_Test($n){
        $r = $n > 30
        ? "greater than 30"
        : ($n > 20
        ? "greater than 20"
        : ($n >10
        ? "greater than 10"
        : "Input a number atleast greater than 10!")); 
        echo $n." : ".$r."\n";
    }
    trinary_Test(32);
    trinary_Test(21);
    trinary_Test(12);
    trinary_Test(4);
?>