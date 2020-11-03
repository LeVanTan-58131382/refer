<?php
// Đặt giá trị mặc định của các biến để tải trang ban đầu
if (!isset($investment)) {
    $investment = ''; // số tiền đầu tư
}
if (!isset($interest_rate)) {
    $interest_rate = ''; // tỉ lệ lãi suất
}
if (!isset($years)) {
    $years = ''; // số năm đầu tư
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Máy tính giá trị (lãi suất đầu tư) tương lai</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
        <h1>Máy tính giá trị (lãi suất đầu tư) tương lai</h1>
        <?php if (!empty($error_message)) { ?>
            <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
        <?php } ?>
        <form action="hien_thi_tien_lai.php" method="post">

            <div id="data">
                <label>Số tiền đầu tư:</label>
                <input type="text" name="investment" value="<?php echo htmlspecialchars($investment); ?>" placeholder="Nhập số tiền đầu tư">
                <br>

                <label>Lãi suất hàng năm:</label>
                <input type="text" name="interest_rate" value="<?php echo htmlspecialchars($interest_rate); ?>" placeholder="Nhập % lãi suất hằng năm">
                <br>

                <label>Số năm:</label>
                <input type="text" name="years" value="<?php echo htmlspecialchars($years); ?>" placeholder="Nhập số năm đầu tư">
                <br>
            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Tính toán"><br>
            </div>

        </form>
    </main>
</body>

</html>