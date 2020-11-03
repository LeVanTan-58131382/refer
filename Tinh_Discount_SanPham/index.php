<!DOCTYPE html>
<html>

<head>
    <title>Máy tính chiết khấu (giảm giá) sản phẩm</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
        <h1>Máy tính chiết khấu (giảm giá) sản phẩm</h1>
        <form action="hien_thi_discount_sp.php" method="post">

            <div id="data">
                <label>Mô tả Sản phẩm:</label>
                <input type="text" name="product_description" placeholder="Nhập tên hoặc mô tả sp..."><br>

                <label>Bảng giá:</label>
                <input type="text" name="list_price" placeholder="Nhập giá sp..."><br>

                <label>Phần trăm chiết khấu (giảm giá):</label>
                <input type="text" name="discount_percent" placeholder="Nhập vào phần trăm giảm giá..."><span>%</span><br>
            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Tính toán"><br>
            </div>

        </form>
    </main>
</body>

</html>