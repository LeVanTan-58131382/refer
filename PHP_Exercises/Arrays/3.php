$ ceu = array ("Ý" => "Rome", "Luxembourg" => "Luxembourg", "Bỉ" => "Brussels", "Đan Mạch" => "Copenhagen",
"Phần Lan" => "Helsinki", "Pháp" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Đức" => "Berlin",
"Hy Lạp" => "Athens", "Ireland" => "Dublin", "Hà Lan" => "Amsterdam", "Bồ Đào Nha" => "Lisbon", "Tây Ban Nha" => "Madrid",
"Thụy Điển" => "Stockholm", "Vương quốc Anh" => "London", "Síp" => "Nicosia", "Lithuania" => "Vilnius",
"Cộng hòa Séc" => "Praha", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" = > "Riga", "Malta" => "Valetta",
"Áo" => "Vienna", "Ba Lan" => "Warsaw");

Tạo một tập lệnh PHP hiển thị tên thủ đô và quốc gia từ mảng $ ceu ở trên. Sắp xếp danh sách theo thủ đô của đất nước.

Đầu ra mẫu:
Thủ đô của Hà Lan là Amsterdam
Thủ đô của Hy Lạp là Athens
Thủ đô của Đức là Berlin

<?php
$ceu = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels", "Denmark" => "Copenhagen",
    "Finland" => "Helsinki", "France" => "Paris",
    "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana",
    "Germany" => "Berlin", "Greece" => "Athens",
    "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon", "Spain" => "Madrid",
    "Sweden" => "Stockholm", "United Kingdom" => "London",
    "Cyprus" => "Nicosia", "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague", "Estonia" => "Tallin",
    "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta",
    "Austria" => "Vienna", "Poland" => "Warsaw"
);
asort($ceu);
foreach ($ceu as $country => $capital) {
    echo "The capital of $country is $capital" . "\n";
}
?>