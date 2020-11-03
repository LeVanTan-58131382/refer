Viết chương trình PHP để tính tổng các số nguyên tố nhỏ hơn 100.
Lưu ý: Có 25 số nguyên tố có ít hơn 100.
2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97 và tổng của tất cả các số này là 1060.


<?php
    $primes = array();
    $is_prime_no = false;
    for ($i = 2; $i<100; $i++) {
        $is_prime_no = true; 
            for ($j = 2; $j<=($i/2); $j++) {
                    if ($i%$j==0) {
                            $is_prime_no = false;
                                    break;
                                    }
                    }
            if ($is_prime_no) {
                array_push($primes,$i);
                    }
            if (count($primes)==100) {
                break;
                    }
    }
    echo array_sum($primes)."\n";
?>