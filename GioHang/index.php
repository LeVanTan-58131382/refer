<?php
session_start();
include("lib.php");

$giohang = new GioHang;
$giohang->connection();

$products = $giohang->getAllPro();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php foreach ($products as $product) { ?>
            <div style="height: 30px"> <a href="giohang.php?id=<?= $product["id"] ?>"><?= $product["name"] ?></a></div>
        <?php } ?>
    </div>

    <div>
        <form action="giohang.php" method="get">
            <table>
                <tr>
                    <td>Tên</td>
                    <td>Giá</td>
                    <td>Số Lượng</td>
                    <td>Tổng Tiền</td>
                </tr>

                <?php
                if (isset($_SESSION["giohang"])) {
                    for ($i = 0; $i < count($_SESSION["giohang"]); $i++) { ?>
                        <tr>
                            <td><?= $_SESSION["giohang"][$i]['ten'] ?></td>
                            <td><?= $_SESSION["giohang"][$i]['dongia'] ?></td>
                            <td>
                                <input type="number" name="soluong_<?= $_SESSION["giohang"][$i]['id'] ?>" value="<?= $_SESSION["giohang"][$i]['sl'] ?>">
                            </td>
                            <td><?= $_SESSION["giohang"][$i]['tongtien'] ?></td>
                            <td>
                                <form action="giohang.php" method="get">
                                    <input type="hidden" name="id_xoa" value="<?= $_SESSION["giohang"][$i]['id'] ?>">
                                    <button type="submit" name="xoa">Xóa</button>
                                </form>
                            </td>
                        </tr>
                <?php }
                } ?>
            </table>
            <button type="submit" name="capnhat">Cập nhật</button>
        </form>
    </div>


</body>

</html>