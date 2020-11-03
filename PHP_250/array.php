<?php

$foods = ["Trứng", "Bánh xèo", "Bánh canh", "Chả cuốn"];

$dongvats = array();
$dongvats = [
    "Sư tử",
    "Đại bàng",
    "Ếch"
];

echo count($dongvats); // 3
echo count($foods); // 4

echo sizeof($dongvats); // 3
echo sizeof($foods); // 4

//---------------------
// Đến số lần xuất hiện của một giá trị trong mảng ???
// Hàm array_count_values()
$thucphams = array(
    "rau" => array("Cải", "Xú", "Mồng Tơi"),
    "củ"  => array("Cà rốt", "Củ Cải", "Khoai tây", "Su hào"),
);

echo count($thucphams); // 2
echo count($thucphams["rau"]); // 3
echo count($thucphams["củ"]); // 4

$len = count($thucphams["rau"]);
for ($i = 0; $i < $len; $i++) {
    echo $thucphams["rau"][$i];
}
// kết quả: Cải Xú Mồng Tơi

//---------------------

echo "<pre>";
print_r(array_count_values($foods));
echo "</pre>";

// kết quả:
// Array
// (
//     [Trứng] => 1 
//     [Bánh xèo] => 1
//     [Bánh canh] => 1
//     [Chả cuốn] => 1
// )
// Tất cả đều có một lần xuất hiện trong mảng

$thucphams["củ"][] = "Khoai tây"; // câu này có tác dụng thêm một values Khoai tây cào mảng củ

echo "<pre>";
print_r(array_count_values($thucphams["củ"]));
echo "</pre>";

// Array
// (
//     [Cà rốt] => 1
//     [Củ Cải] => 1
//     [Khoai tây] => 2    // Khoai tây xuất hiện 2 lần trong mảng củ
//     [Su hào] => 1
// )


// ---------------------
// Tìm một giá trị có trong một mảng không ???
// Hàm in_array: nếu có trả về 1, nếu ko ko trả về giá trị
// Hàm array_search: nếu có trả về vị trí index của giá trị đó trong mảng, nếu ko ko trả về giá trị

$tim = array("Ớt", "Tỏi", "Cà chua", "Chè", "Cocacola", 89);

if (in_array("Cà chua", $tim)) {
    echo "Tìm thấy Cà chua";
} else {
    echo "Không tìm thấy Cà chua";
}
// kết quả: Tìm thấy Cà chua

if (in_array("Cà phê", $tim)) {
    echo "Tìm thấy Cà phê";
} else {
    echo "Không tìm thấy Cà phê";
}

// kết quả: Tìm thấy Cà phê

if (in_array(89, $tim)) {
    echo "Tìm thấy 89";
} else {
    echo "Không tìm thấy 89";
}

// kết quả: Tìm thấy 89

$ditim = array(
    array("p", "h"),
    array("c", "b"),
    "ah"
);
if (in_array(array("p", "h"), $ditim)) {
    echo "Tìm thấy (array('p', 'h')";   // kết quả
} else {
    echo "Không tìm thấy (array('p', 'h')";
}

$tim = array("Ớt", "Tỏi", "Cà chua", "Chè", "Cocacola", 89);
$tim_key = array("a" => "Ớt", "b" => "Tỏi", "c" => "Cà chua", "d" => "Chè", "e" => "Cocacola", 89);
// Hàm array_search
echo array_search("Chè", $tim); // 3
echo array_search("Đậu xanh", $tim); // không trả về giá trị nào
echo array_search("Chè", $tim_key); // d


//------------------------------
// Thay thể
$rau = ["Hành ngò", "Cải thảo", "Cải ngọt", "Mồng tơi"];
$cu = ["Khoai sọ", "Củ cải"];
$mausac = ["Cam", "Đỏ", "Vàng", "Xanh"];

$rauvacu = array_replace($rau, $cu); // thay 2 phần tử đầu của mảng rau bằng 2 phần tử của mảng củ

echo "<pre>";
print_r($rauvacu);
echo "</pre>";
// kết quả
// Array
// (
//     [0] => Khoai sọ
//     [1] => Củ cải
//     [2] => Cải ngọt
//     [3] => Mồng tơi
// )

$rauvacuvamau = array_replace($rau, $cu, $mausac);   // sau khi thay thằng củ vào rau thì thay màu sắc ào rau
echo "<pre>";
print_r($rauvacuvamau);
echo "</pre>";
//kết quả
// Array
// (
//     [0] => Cam
//     [1] => Đỏ
//     [2] => Vàng
//     [3] => Xanh
// )

// Tuy nhiên nếu có key thì ko thể thay thế kiểu bình thường dc
$cu = ["a" => "Khoai sọ", "b" => "Củ cải"];
$mausac = ["Cam", "Đỏ", "Vàng", "Xanh"];

$cuvamau = array_replace($cu, $mausac);
echo "<pre>";
print_r($cuvamau);
echo "</pre>";
// kết quả
// Array
// (
//     [a] => Khoai sọ
//     [b] => Củ cải
//     [0] => Cam
//     [1] => Đỏ
//     [2] => Vàng
//     [3] => Xanh
// )


$mausac = ["Cam", "Đỏ", "Vàng", "a" => "Xanh"];
$cu = ["a" => "Khoai sọ", 1 => "Củ cải"];
$cuvamau = array_replace($mausac, $cu);
echo "<pre>";
print_r($cuvamau);
echo "</pre>";
// kết quả
// Array
// (
//     [0] => Cam
//     [1] => Củ cải // thay Đỏ (có index = 1) bằng củ cải có index = 1 (biểu diễn kiểu key => value nhưng để kiểu 1 => value thì 1 là index)
//     [2] => Vàng
//     [a] => Khoai sọ // thay Xanh bằng Khoai sọ vì cùng có key là a
// )



$arr_1 = array("a" => array("red"), "b" => array("green", "pink"));
$arr_2 = array("a" => array("yellow"), "b" => array("black"));

$new_arr = array_replace($arr_1, $arr_2);
echo "<pre>";
print_r($new_arr);
echo "</pre>";
// kết quả
// Array
// (
//     [a] => Array
//         (
//             [0] => yellow
//         )

//     [b] => Array
//         (
//             [0] => black
//         )

// )

$new_arr_2 = array_replace_recursive($arr_1, $arr_2);
echo "<pre>";
print_r($new_arr_2);
echo "</pre>";
// kết quả
// Array
// (
//     [a] => Array
//         (
//             [0] => yellow
//         )

//     [b] => Array
//         (
//             [0] => black
//             [1] => pink
//         )

// )



// ---------------------
// Thêm và bớt phần tử trong mảng
// array_push($tên mảng, "giá trị"), thêm một hoặc nhiều phần tử vào cuối 
// mảng và trả về số lượng phần tử của mảng sau khi thêm.;
// array_pop($tên mảng), Hàm này bỏ phần tử cuối và Trả về phần tử cuối cùng của mảng

// push
$traicay = ["Cam", "Quýt", "Nhãn", "Mãn cầu"];
print_r(array_push($traicay, "Thanh long", "Bơ")); // đầu tiên thêm sau đó trả về giá trị là 6

echo "<pre>";
print_r($traicay);
echo "</pre>";
// kết quả : 6 phần tử
// Array
// (
//     [0] => Cam
//     [1] => Quýt
//     [2] => Nhãn
//     [3] => Mãn cầu
//     [4] => Thanh long
//     [5] => Bơ
// )

$traicaymientay = ["Sầu riêng", "Bưởi năm roi"];
array_push($traicay, $traicaymientay);
echo "<pre>";
print_r($traicay);
echo "</pre>";
// Array
// (
//     [0] => Cam
//     [1] => Quýt
//     [2] => Nhãn
//     [3] => Mãn cầu
//     [4] => Thanh long
//     [5] => Bơ
//     [6] => Array
//         (
//             [0] => Sầu riêng
//             [1] => Bưởi năm roi
//         )
// )


// pop : bỏ phần tử cuối cùng - ta bỏ thằng mảng có giá trị của thằng trái cây miền tây
print_r(array_pop($traicay)); // trả về phần tử cuối cùng mà nó bỏ Array ( [0] => Sầu riêng [1] => Bưởi năm roi )
echo "<pre>";
print_r($traicay);
echo "</pre>";
// Array
// (
//     [0] => Cam
//     [1] => Quýt
//     [2] => Nhãn
//     [3] => Mãn cầu
//     [4] => Thanh long
// )

array_push($traicay, $traicaymientay[0], $traicaymientay[1]);
echo "<pre>";
print_r($traicay);
echo "</pre>";
// Array
// (
//     [0] => Cam
//     [1] => Quýt
//     [2] => Nhãn
//     [3] => Mãn cầu
//     [4] => Thanh long
//     [5] => Bơ
//     [6] => Sầu riêng
//     [7] => Bưởi năm roi
// )



// ---------------------
// merge mảng
// array_merge(): những giá trị nào cùng key thì nó sẽ thay thế bằng giá trị mảng đằng sau cùng

$hoaqua = ["Táo", "Xoài", "b" => "Chôm chôm"];
$ngucoc = ["Lúa gạo", "b" => "Lúa mì"];
$dau = ["Đậu xanh", "b" => "Đậu nành", "Đậu đỏ"];

$hoaquangucocdau = array_merge($hoaqua, $ngucoc, $dau); // gộp và thay chôm chôm = lúa mì = đậu nành
echo "<pre>";
print_r($hoaquangucocdau);
echo "</pre>";
// kết quả
// Array
// (
//     [0] => Táo
//     [1] => Xoài
//     [b] => Đậu nành
//     [2] => Lúa gạo
//     [3] => Đậu xanh
//     [4] => Đậu đỏ
// )

$hoaqua = ["Táo", "Xoài", "b" => "Chôm chôm"];
$ngucoc = ["Lúa gạo", "b" => "Lúa mì"];
$congmang = array_merge_recursive($hoaqua, $ngucoc);
echo "<pre>";
print_r($congmang);
echo "</pre>";
// Array
// (
//     [0] => Táo
//     [1] => Xoài
//     [b] => Array
//         (
//             [0] => Chôm chôm
//             [1] => Lúa mì
//         )

//     [2] => Lúa gạo
// )

$dau = ["Đậu xanh", "b" => ["Đậu ăn chè" => ["Đậu đen", "Đậu dán"]], "Đậu đỏ"];
$congmang = array_merge_recursive($congmang, $dau);
echo "<pre>";
print_r($congmang);
echo "</pre>";
// Array
// (
//     [0] => Táo
//     [1] => Xoài
//     [b] => Array
//         (
//             [0] => Chôm chôm
//             [1] => Lúa mì
//             [Đậu ăn chè] => Array
//                 (
//                     [0] => Đậu đen
//                     [1] => Đậu dán
//                 )

//         )

//     [2] => Lúa gạo
//     [3] => Đậu xanh
//     [4] => Đậu đỏ
// )

// Combie mảng
$ten = ["Tân", "Cường", "Tiến", "Hoài"];
$tuoi = [20, 21, 22, 18];

$tentuoi = array_combine($ten, $tuoi);
echo "<pre>";
print_r($tentuoi);
echo "</pre>";
// Array
// (
//     [Tân] => 20
//     [Cường] => 21
//     [Tiến] => 22
//     [Hoài] => 18
// )



// ---------------------

// Cắt mảng
// Hàm array_slice(array, start, end)
$qua = ["Nhãn(0)", "Chuối(1)", "Xoài(2)", "Chôm chôm(3)"];

$catqua = array_slice($qua, 1, 2); // cắt từ vị trí index=1 đến vị trí index=2

echo "<pre>";
print_r($catqua);
echo "</pre>";
// Array
// (
//     [0] => Chuối(1)
//     [1] => Xoài(2)
// )

$xe = ["Xe tải (-5)", "Xe con (-4)", "xe" => "Xe đạp (-3)", "Xe máy (-2)", "Xe ben (-1)"];
$catxe = array_slice($xe, -3, 1); // cắt từ vị trí -3, lấy 1 phần tử
echo "<pre>";
print_r($catxe);
echo "</pre>";
// Array
// (
//     [0] => Xe đạp (-3)
// )

// thêm true để hiện key của nó nếu có
$catxe_2 = array_slice($xe, -4, 3, true); // cắt từ vị trí -4, lấy 2 phần tử
echo "<pre>";
print_r($catxe_2);
echo "</pre>";
// Array
// (
//     [1] => Xe con (-4)
//     [xe] => Xe đạp (-3)
//     [2] => Xe máy (-2)
// )


// Hàm array_splice(array, start, end, array-2)
$mausac = ["Cam", "Đỏ", "Vàng", "Tím", "Nâu"];

$mausac_1 = array_splice($mausac, 1);
echo "<pre>";
print_r($mausac_1);
echo "</pre>";
// Array
// (
//     [0] => Cam
// )

$mausac = ["Cam (-5)", "Đỏ(-4)", "Vàng(-3)", "Tím(-2)", "Nâu(-1)"];
array_splice($mausac, 1, -1);
echo "<pre>";
print_r($mausac);
echo "</pre>";
// Array
// (
//     [0] => Đỏ(-4)
//     [1] => Vàng(-3)
//     [2] => Tím(-2)
// )

$mausac = ["Cam (-5)", "Đỏ(-4)", "Vàng(-3)", "Tím(-2)", "Nâu(-1)"];
$hoa = ["Hoa Lan", "Hoa 10 giờ"];

array_splice($mausac, 2, 2, $hoa); // nỗi mảng màu sắc và hoa vào với nhau từ vị trí thứ 2 của màu sắc, chỉ lấy 2 phần tử để nối
echo "<pre>";
print_r($mausac);
echo "</pre>";
// Array
// (
//     [0] => Cam (-5)
//     [1] => Đỏ(-4)
//     [2] => Hoa Lan
//     [3] => Hoa 10 giờ
//     [4] => Nâu(-1)
// )

$mausac = ["Cam (-5)", "Đỏ(-4)", "Vàng(-3)", "Tím(-2)", "Nâu(-1)"];
array_splice($mausac, 2, 1, $hoa); // nỗi mảng màu sắc và hoa vào với nhau từ vị trí thứ 2 của màu sắc, chỉ lấy 1 phần tử để nối
echo "<pre>";
print_r($mausac);
echo "</pre>";
// Array
// (
//     [0] => Cam (-5)
//     [1] => Đỏ(-4)
//     [2] => Hoa Lan
//     [3] => Hoa 10 giờ
//     [4] => Tím(-2)
//     [5] => Nâu(-1)
// )


// ---------------------
// Array key function
// array_keys()
// array_key_first()
// array_key_last()
// array_key_exists()
// key_exists()

$hocluc = ["Khá", "Giỏi", "Trung bình", "Yếu"];

$indexhocluc = array_keys($hocluc); // key giờ là index
echo "<pre>";
print_r($indexhocluc);
echo "</pre>";
// Array
// (
//     [0] => 0
//     [1] => 1
//     [2] => 2
//     [3] => 3
// )

$thutu = ["first" => "Đầu tiên", "second" => "Thứ hai", "third" => "Thứ ba"];

$indexthutu = array_keys($thutu);
echo "<pre>";
print_r($indexthutu);
echo "</pre>";
// Array
// (
//     [0] => first
//     [1] => second
//     [2] => third
// )

$indexexists = array_key_exists("second", $thutu);
echo $indexexists; // 1
$indexexists = array_key_exists("six", $thutu);
echo $indexexists;// ko hiển thị giá trị
