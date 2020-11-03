Viết một tập lệnh PHP để lấy khóa lớn nhất trong một mảng.

<?php
$ceu = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm",
    "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw"
);
$max_key = max(array_keys($ceu));
echo $max_key . "\n"; //United Kingdom
?>

Hàm array_keys() Trả về một mảng chứa các khóa,
Hàm mới sẽ bao gồm các giá trị là các khóa của mảng cũ, ta lấy giá trị có độ lớn max nhất