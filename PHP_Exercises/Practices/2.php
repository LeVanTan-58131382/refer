<?php

/**
 * check so nguyen to
 *
 * @author viettuts.vn
 * @param n: so nguyen duong
 * @return boolean
 */
function isPrimeNumber($n)
{
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $squareRoot = sqrt($n);
    for ($i = 2; $i <= $squareRoot; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$arr_soNguyenTo = array();


for ($i = 0; $i < 10000; $i++) {
    if (isPrimeNumber($i)) {
        //echo ($i . " ");
        $arr_soNguyenTo[] = $i;
    }
}

echo ("5 số nguyên tố nhỏ hơn 10000 là: <br>");
for ($i = count($arr_soNguyenTo) - 1; $i > count($arr_soNguyenTo) - 5; $i--) {
    echo $arr_soNguyenTo[$i] . " ";
}
