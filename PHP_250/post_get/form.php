<?php
// với action="<?= $_SERVER['PHP_SELF']; trang này sẽ xử lý form
if (isset($_GET["mua"])) {
    if (isset($_GET["xe"]) && isset($_GET["gia"])) {
        $xe = $_GET["xe"];
        $gia = $_GET["gia"];

        echo "Xe: " . $xe . " Giá " . $gia . "<br>";
    }
}

?>

<html>
<form action="xuly.php" method="POST">
    Name: <input type="text" name="name">
    Age: <input type="number" name="age">

    <button type="submit" name="gui">Gửi</button>
</form>

<form action="<?= $_SERVER['PHP_SELF']; ?>" method="GET">
    Xe: <input type="text" name="xe">
    Giá: <input type="number" name="gia">

    <button type="submit" name="mua">Mua</button>
</form>

</html>