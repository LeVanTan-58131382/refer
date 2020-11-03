<?php

function danhVan($soTien)
{
    $danhVan = "";
    if (!is_numeric($soTien)) {
        return false;
    }
    settype($soTien, "integer");

    $dem = [
        "1" => "Một ",
        "2" => "Hai ",
        "3" => "Ba ",
        "4" => "Bốn ",
        "5" => "Năm ",
        "6" => "Sáu ",
        "7" => "Bảy ",
        "8" => "Tám ",
        "9" => "Chín ",
        "10" => "Mười ",
        "11" => "Mười Một ",
        "12" => "Mười Hai ",
        "13" => "Mười Ba ",
        "14" => "Mười Bốn ",
        "15" => "Mười Lăm ",
        "16" => "Mười Sáu ",
        "17" => "Mười Bảy ",
        "18" => "Mười Tám ",
        "19" => "Mười Chín ",
        "20" => "Hai Mươi ",
        "30" => "Ba Mươi ",
        "40" => "Bốn Mươi ",
        "50" => "Năm Mươi ",
        "60" => "Sáu Mươi ",
        "70" => "Bảy Mươi ",
        "80" => "Tám Mươi ",
        "90" => "Chín Mươi ",
        "100" => "Một Trăm ",
        "200" => "Hai Trăm ",
        "300" => "Ba Trăm ",
        "400" => "Bốn Trăm ",
        "500" => "Năm Trăm ",
        "600" => "Sáu Trăm ",
        "700" => "Bảy Trăm ",
        "800" => "Tám Trăm ",
        "900" => "Chín Trăm ",


    ];

    switch ($soTien) {
        case $soTien < 100: {
                // Đọc phần chục
                foreach ($dem as $key => $van) {
                    if (($soTien % 100 - $soTien % 10)  == $key) {
                        $danhVan .= $dem[$key];
                        // Đọc phần đơn vị
                        foreach ($dem as $key => $van) {
                            if ($soTien % 10 == $key) {
                                $danhVan .= $dem[$key];
                            }
                        }
                    }
                }
            }
            break;

        case $soTien < 1000: {
                // Đọc phần trăm
                foreach ($dem as $key => $van) {
                    if (($soTien % 1000 - $soTien % 100)  == $key) {
                        $danhVan .= $dem[$key];
                        // Đọc phần chục
                        foreach ($dem as $key => $van) {
                            if (($soTien % 100 - $soTien % 10) == $key) {
                                $danhVan .= $dem[$key];
                                // Đọc phần đơn vị
                                foreach ($dem as $key => $van) {
                                    if ($soTien % 10 == $key) {
                                        $danhVan .= $dem[$key];
                                    }
                                }
                            }
                        }
                    }
                }
            }
            break;

        case $soTien < 1000000: {
                // Đếm phần trăm nghìn
                $phanTramNghin =  (int)($soTien / 1000) % 1000 - (int)($soTien / 1000) % 100;
                $phanChucNghin =  (int)($soTien / 1000) % 100 - (int)($soTien / 1000) % 10;
                $phanNghin =  (int)(int)($soTien / 1000) % 10;

                echo ($phanTramNghin);
            }
            break;
    }

    return $danhVan;
}

echo 45 % 10 . "<br>"; // 
echo ((int)(123456 / 1000)  % 100) . "<br>"; // 
echo 1234567890 % 1000000000 . "<br>"; // 

echo (danhVan(92145));
