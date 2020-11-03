<?php include 'view/header.php'; ?>
<?php include 'view/sidebar.php';
?>

<div class="ad-part-content">
    <div class="text_intro">
        <h1>Sản phẩm nổi bật</h1>
        <p>Chúng tôi có nhiều lựa chọn về sách bao gồm
            sách thiếu nhi, sách kỹ năng sống và truyện của Tô Hoài... Và chúng tôi không ngừng bổ sung thêm để cung cấp
            bạn sự lựa chọn tốt nhất có thể!!
        </p>
    </div>

    <div class="list_sp_noibat">

        <?php foreach ($products as $product) :
            // Get product data
            $list_price = $product['listPrice'];
            $discount_percent = $product['discountPercent'];
            $description = $product['description'];

            // Calculate unit price
            $discount_amount = round($list_price * ($discount_percent / 100.0), 2);
            $unit_price = $list_price - $discount_amount;

            // Get first paragraph of description
            $description_with_tags = add_tags($description);
            $i = strpos($description_with_tags, "</p>");
            $first_paragraph = substr($description_with_tags, 3, $i - 3);
        ?>
            <div class="sp_noibat">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="images/<?= htmlspecialchars($product['productCode']); ?>.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href="catalog?product_id=<?= $product['productID']; ?>">
                            <h5 class="card-title"><?= htmlspecialchars($product['productName']); ?></h5>
                        </a>
                        <p><b>Bảng giá:</b>
                            $<?= number_format($unit_price, 2); ?></p>
                        <p class="card-text"><?= $first_paragraph; ?></p>
                        <?php if (!isset($_SESSION["admin"])) { ?>
                            <form action="<?= $app_path . 'cart' ?>" method="get" id="add_to_cart_form">
                                <input type="hidden" name="action" value="add" />
                                <input type="hidden" name="product_id" value="<?= $product_id; ?>" />
                                <b>Số lượng:</b>&nbsp;
                                <input class="form-control" style="width: 50px" type="text" name="quantity" value="1" size="2" />
                                <input class="btn btn-primary" type="submit" value="Thêm vào giỏ" />
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<style>
    .list_sp_noibat {
        position: relative;
        top: 90px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 1.5rem;
    }

    .sp_noibat {
        position: relative;
    }

    .text_intro {
        position: relative;
        width: 100%;
        height: 50px;
        padding: 5px;
    }

    .text_intro h1,
    .text_intro p {
        font-family: 'Herr Von Muellerhoff', cursive;

    }

    .text_intro h1 {
        text-align: center;
    }

    .text_intro p {
        font-size: 20px;
    }
</style>
</body>
<br>
<br>
<br>
<br>
<?php include 'view/footer.php'; ?>