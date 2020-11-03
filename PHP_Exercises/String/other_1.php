<form action="" method="get">
    <input type="text" name="chuoi" placeholder="Nhập vào chuỗi bạn muốn kiểm tra">
    <input type="submit" name="nut_kt" value="Kiểm tra">
</form>

<?php
if (isset($_GET["nut_kt"])) {
    $input = $_GET["chuoi"];

    if ($input != "") {
        if (kiem_tra($input) == true) {
            echo "Chuỗi hợp lệ";
        } else echo "Chuỗi không hợp lệ";
    } else echo "Mời bạn nhập chuỗi!";
}

function kiem_tra($str)
{
    $arr_1 = array();
    $arr_2 = array();

    for ($i = 0; $i < strlen($str); $i++) {
        if (($str[$i] == "{") || ($str[$i] == "[") || ($str[$i] == "(")) {
            $arr_1[] = $str[$i];
        }
    }

    for ($i = 0; $i < strlen($str); $i++) {
        if (($str[$i] == "}") || ($str[$i] == "]") || ($str[$i] == ")")) {
            $arr_2[] = $str[$i];
        }
    }

    $arr_2 = array_reverse($arr_2);
    // replace
    for ($i = 0; $i < count($arr_2); $i++) {
        if ($arr_2[$i] == "}") {
            $arr_2[$i] = "{";
        }

        if ($arr_2[$i] == ")") {
            $arr_2[$i] = "(";
        }

        if ($arr_2[$i] == "]") {
            $arr_2[$i] = "[";
        }
    }

    for ($i = 0; $i < count($arr_2); $i++) {
        if (empty($arr_1) || empty($arr_2) || $arr_1[$i] != $arr_2[$i]) {
            return false;
        } else return true;
    }

    return false;
}

?>