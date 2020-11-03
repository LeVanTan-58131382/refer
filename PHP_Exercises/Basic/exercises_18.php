Các phép toán số học trên biến ký tự: $ d = 'A00'. Sử dụng biến này in các số sau:
A01
A02
A03
A04
A05

<?php
    $d = 'A00';
    echo "<br>";
    for ($n=0; $n<5; $n++)
    {
        echo ++$d ."\n";
    }
?>