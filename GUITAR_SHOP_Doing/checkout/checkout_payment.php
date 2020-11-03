<?php include '../view/header.php'; ?>
<?php include '../view/sidebar.php'; ?>
<div class="ad-part-content">
    <div class="noidungcon">
        <h2>Địa chỉ thanh toán</h2>
        <p><?php echo htmlspecialchars($billing_address['line1']); ?><br>
            <?php if (strlen($billing_address['line2']) > 0) : ?>
                <?php echo htmlspecialchars($billing_address['line2']); ?><br>
            <?php endif; ?>
            <?php echo htmlspecialchars($billing_address['city'] . ', ' .
                $billing_address['state'] . ' ' .
                $billing_address['zipCode']); ?><br>
            <?php echo htmlspecialchars($billing_address['phone']); ?>
        </p>
        <form action="../account" method="post">
            <input type="hidden" name="action" value="edit_billing">
            <input type="submit" value="Chỉnh sửa địa chỉ thanh toán">
        </form>
        <h2>Thông tin thanh toán</h2>
        <form action="." method="post" id="payment_form">
            <input type="hidden" name="action" value="process">
            <label>Loại thẻ:</label>
            <select name="card_type">
                <option value="1">MasterCard</option>
                <option value="2">Visa</option>
                <option value="3">Discover</option>
                <option value="4">American Express</option>
            </select>
            <br>

            <label>Số Thẻ:</label>
            <input type="text" name="card_number" value="<?php echo htmlspecialchars($card_number); ?>">
            <span class="error"><?php// echo $cc_number_message; ?></span>
            <span>Không có dấu gạch ngang hoặc dấu cách.</span>
            <br>

            <label>CVV:</label>
            <input type="text" name="card_cvv" value="<?php echo htmlspecialchars($card_cvv); ?>">
            <span class="error"><?php echo $cc_ccv_message; ?></span>
            <br>

            <label>Hết hạn:</label>
            <input type="text" name="card_expires" value="<?php echo htmlspecialchars($card_expires); ?>">
            <span class="error"><?php echo $cc_expiration_message; ?></span>
            <span>MM/YYYY</span>
            <br>

            <label>&nbsp;</label>
            <input type="submit" value="Đặt hàng">&nbsp;&nbsp;
            <span>Chỉ nhấp một lần.</span>
        </form>
        <form action="../cart" method="post">
            <input type="submit" value="Cancel Payment Entry">
        </form>
    </div>
</div>
</div>

<style>
    .noidungcon {
        position: relative;
        left: 0%;
        top: 0%;
        width: 100%;
        height: 100%;
        /* border: 1px solid black; */
        border-radius: 5px;
        padding: 30px;
    }
</style>
<?php include '../view/footer.php'; ?>