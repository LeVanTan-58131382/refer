<?php
require('database.php');
$query = 'SELECT *
          FROM categories
          ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->

<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<!-- the body section -->

<body>
    <header>
        <h1>Quản Lý Sản Phẩm</h1>
    </header>

    <main>
        <h1>Thêm Sản Phẩm</h1>
        <form action="them_sp_xuly.php" method="post" id="add_product_form">

            <label>Loại đàn:</label>
            <select name="category_id">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['categoryID']; ?>">
                        <?php echo $category['categoryName']; ?>
                    </option>
                <?php endforeach; ?>
            </select><br>

            <label>Mã Code:</label>
            <input type="text" name="code" placeholder="Nhập mã sp..."><br>

            <label>Tên:</label>
            <input type="text" name="name" placeholder="Nhập tên sp..."><br>

            <label>Giá:</label>
            <input type="text" name="price" placeholder="Nhập giá sp..."><br>

            <label>&nbsp;</label>
            <input type="submit" value="Thêm mới"><br>
        </form>
        <p><a href="index.php">Xem Danh Sách Sản Phẩm</a></p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>

</html>