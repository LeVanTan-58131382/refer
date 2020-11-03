$ color = array ('white', 'green', 'red' ') Đi tới trình chỉnh sửa
Viết một tập lệnh PHP sẽ hiển thị các màu theo cách sau:
Đầu ra:
trắng, xanh lá cây, đỏ,

màu xanh lá
đỏ
trắng

<?php
$color = array('white', 'green', 'red');
foreach ($color as $c) {
    echo "$c, ";
}

sort($color);

echo "<ul>";

foreach ($color as $y) {
    echo "<li>$y</li>";
}
echo "</ul>";
?>