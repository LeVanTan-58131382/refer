<!DOCTYPE html>
<html>

<!-- the head section -->

<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->

<body>
    <header>
        <h1>My Guitar Shop</h1>
    </header>

    <main>
        <h1>Lỗi cơ sở dữ liệu</h1>
        <p>Đã xảy ra lỗi khi kết nối với cơ sở dữ liệu.</p>
        <p>Cơ sở dữ liệu phải được cài đặt như mô tả trong phụ lục.</p>
        <p>MySQL phải đang chạy như được mô tả trong chương 1.</p>
        <p>Thông báo lỗi: <?php echo $error_message; ?></p>
        <p>&nbsp;</p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>

</html>