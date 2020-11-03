Viết một chương trình PHP để hoán đổi hai biến (dùng biến thứ 3)

<?php
    $a = 15;
    $b = 27;
    
    // Swap Logic

    echo "\nThe number before swapping is:\n";
    echo "Number a =".$a." and b=".$b;

    $temp = $a;
    $a = $b;
    $b = $temp;
    
    echo "\nThe number after swapping is: \n";
    echo "Number a =".$a." and b=".$b."\n";
?>