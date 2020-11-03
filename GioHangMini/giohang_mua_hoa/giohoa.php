<?php
session_start();
ob_start();
?>
<html>

<head>
    <title>Bài tập</title>
    <meta charset='utf-8' />
</head>

<body>
    <h1>Trang basket</h1>
    <form action="" method="post">
        <input type="hidden" name="action" value="capnhatsoluonghoa">
        <table border='1'>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Thành tiền</th>
            </tr>
            <?php
            // Nếu chưa có hoa nào thì chúng ta sẽ quay về trang muahoa.php
            if (!$_SESSION['giohoa']) {
                header('location:muahoa.php');
            }

            $tongTien = 0;
            foreach ($_SESSION['giohoa'] as $hoa) {
                $thanhTien = $hoa['gia'] * $hoa['soluong'];
                $tongTien += $thanhTien;
            ?>
                <!-- Vòng lặp mảng session giohoa ra biến hoa -->
                <tr>
                    <td><?= "<a>" . $hoa['tenhoa'] . "</a>"; ?></td>
                    <input type="hidden" name="idhoa<?= $hoa['id'] ?>" value="<?= $hoa['id'] ?>">
                    <td><input type="number" name="soluong_<?= $hoa['id'] ?>" value="<?= $hoa['soluong']; ?>"></td>
                    <td><?= number_format($hoa['gia'], 0, ',', '.'); ?> VND</td>
                    <td><?= number_format($thanhTien, 0, ',', '.'); ?> VND</td>
                </tr>
            <?php
            }
            ?>
            // Tính ra tổng tiền
            <tr>
                <td colspan='4' align='right'>Tổng tiền: <?= number_format($tongTien, 0, ',', '.'); ?> VND</td>
            </tr>
            <tr>
                <td><input type="submit" name="capnhat" value="Cập nhật"></td>
            </tr>
        </table>
    </form>
    <a href='muahoa.php'>Quay lại</a>
</body>

</html>
<?php
ob_end_flush();
?>

<?php
// cập nhật số lượng hoa
if (isset($_POST["capnhat"])) {
    $soluongloaihoatronggio = count($_SESSION['giohoa']);
    echo $soluongloaihoatronggio;
    for ($i = 0; $i < $soluongloaihoatronggio; $i++) {
        // $soluongmoi = $_POST["soluong_{$_SESSION['giohoa'][$i]['id']}"];
        // $_SESSION['giohoa'][$i]['soluong'] = $soluongmoi;
        echo $_SESSION['giohoa'][$id]['id'];
    }
    // foreach ($_SESSION['giohoa'] as $hoa) {

    //     // $idhoa = $_POST["idhoa{$hoa['id']}"];
    //     $soluongmoi = $_POST["soluong_{$hoa['id']}"];
    //     $hoa['soluong'] = $soluongmoi;

    //     echo $hoa['id'] . $hoa['tenhoa'] . $hoa['soluong'] . "<br>";
    // }

    foreach ($_SESSION['giohoa'] as $hoa) {


        echo $hoa['id'] . $hoa['tenhoa'] . $hoa['soluong'] . "<br>";
    }
}
?>