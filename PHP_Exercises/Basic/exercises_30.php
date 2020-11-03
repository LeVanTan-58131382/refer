Viết một chương trình PHP để hoán đổi hai biến (không dùng biến thứ 3)

<?php
    $a = 15;
    $b = 276;
    echo "\nBefore swapping:  ". $a . ',' . $b;
    list($a, $b) = array($b, $a);
    echo "\nAfter swapping:  ". $a . ',' . $b."\n";
?>
