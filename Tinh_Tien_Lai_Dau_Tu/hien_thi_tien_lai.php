<?php
// lấy dữ liệu từ biểu mẫu
$investment = filter_input(
    INPUT_POST,
    'investment',
    FILTER_VALIDATE_FLOAT
);
$interest_rate = filter_input(
    INPUT_POST,
    'interest_rate',
    FILTER_VALIDATE_FLOAT
);
$years = filter_input(
    INPUT_POST,
    'years',
    FILTER_VALIDATE_INT
);

// validate investment
if ($investment === FALSE) {
    $error_message = 'Tiền đầu tư phải là một số hợp lệ.';
} else if ($investment <= 0) {
    $error_message = 'Tiền đầu tư phải lớn hơn 0.';
    // validate interest rate
} else if ($interest_rate === FALSE) {
    $error_message = 'Lãi suất phải là một số hợp lệ.';
} else if ($interest_rate <= 0) {
    $error_message = 'Lãi suất phải lớn hơn 0.';
    // validate years
} else if ($years === FALSE) {
    $error_message = 'Số năm phải là một số nguyên hợp lệ.';
} else if ($years <= 0) {
    $error_message = 'Số năm phải lớn hơn 0.';
} else if ($years > 30) {
    $error_message = 'Số năm phải dưới 31.';
    // Đặt thông báo lỗi thành chuỗi trống nếu không có mục nhập không hợp lệ
} else {
    $error_message = '';
}

// nếu có thông báo lỗi, hãy chuyển đến trang index
if ($error_message != '') {
    include('index.php');
    exit();
}

// tính toán giá trị tương lai
$future_value = $investment;
for ($i = 1; $i <= $years; $i++) {
    $future_value += ($future_value * $interest_rate * .01);
    echo $future_value . "\n";
}

// áp dụng định dạng tiền tệ và phần trăm
$investment_f = '$' . number_format($investment, 2);
$yearly_rate_f = $interest_rate . '%';
$future_value_f = '$' . number_format($future_value, 2);
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

        <label>Số tiền đầu tư:</label>
        <span><?php echo $investment_f; ?></span><br>

        <label>Lãi suất hàng năm:</label>
        <span><?php echo $yearly_rate_f; ?></span><br>

        <label>Số năm:</label>
        <span><?php echo $years; ?></span><br>

        <label>Giá trị (tiền lãi) tương lai:</label>
        <span><?php echo $future_value_f; ?></span><br>
    </main>
</body>

</html>

GIẢI THÍCH:
Ví dụ năm đầu tiên đầu tư 10000, lãi 20% (2000), thì năm đầu tiên thu về 12000,
thì năm thứ 2 sẽ đầu tư 12000, cứ thế cộng dồn tiền lãi vào đầu tư cho năm sau