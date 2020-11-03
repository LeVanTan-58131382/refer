<?php
//Viết chương trình có input: aaabbacccdeeeaaaa => output: a3b2a1c3d1e3a4

$input = 'aaabbacccdeeeaaaab';
$output = '';
$dem_a = 0;
$dem_b = 0;
$dem_c = 0;
$dem_d = 0;
$dem_e = 0;
for ($i = 0; $i < strlen($input); $i++) {
    if ($input[$i] == "a") {
        $dem_a++;
        if ($input[$i] == "a" && $input[$i + 1] != "a") {
            $output .= "a" . $dem_a;
            $dem_a = 0;
        }
    }
    if ($input[$i] == "b") {
        $dem_b++;
        if ($input[$i] == "b" && $input[$i + 1] != "b") {
            $output .= "b" . $dem_b;
            $dem_b = 0;
        }
    }
    if ($input[$i] == "c") {
        $dem_c++;
        if ($input[$i] == "c" && $input[$i + 1] != "c") {
            $output .= "c" . $dem_c;
            $dem_c = 0;
        }
    }
    if ($input[$i] == "d") {
        $dem_d++;
        if ($input[$i] == "d" && $input[$i + 1] != "d") {
            $output .= "d" . $dem_d;
            $dem_d = 0;
        }
    }
    if ($input[$i] == "e") {
        $dem_e++;
        if ($input[$i] == "e" && $input[$i + 1] != "e") {
            $output .= "e" . $dem_e;
            $dem_e = 0;
        }
    }
}

echo $output;
