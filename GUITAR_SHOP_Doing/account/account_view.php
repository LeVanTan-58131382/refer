<?php include '../view/header.php'; ?>
<?php include '../view/sidebar.php'; ?>
<div class="ad-part-content">
    <div class="noidungcon">
        <h1>Tài khoản của tôi</h1>
        <p><?php echo $customer_name . ' (' . $email . ')'; ?></p>
        <form action="." method="post">
            <input type="hidden" name="action" value="view_account_edit">
            <input class="btn btn-info" type="submit" value="Cập nhật tài khoản">
        </form>
        <h2>Địa chỉ giao hàng</h2>
        <p><?php echo htmlspecialchars($shipping_address['line1']); ?><br>
            <?php if (strlen($shipping_address['line2']) > 0) : ?>
                <?php echo htmlspecialchars($shipping_address['line2']); ?><br>
            <?php endif; ?>
            <?php echo htmlspecialchars($shipping_address['city']); ?>, <?php
                                                                        echo htmlspecialchars($shipping_address['state']); ?>
            <?php echo htmlspecialchars($shipping_address['zipCode']); ?><br>
            <?php echo htmlspecialchars($shipping_address['phone']); ?>
        </p>
        <form action="." method="post">
            <input type="hidden" name="action" value="view_address_edit">
            <input type="hidden" name="address_type" value="shipping">
            <input class="btn btn-info" type="submit" value="Cập nhật địa chỉ giao hàng">
        </form>
        <h2>Địa chỉ thanh toán</h2>
        <p><?php echo htmlspecialchars($billing_address['line1']); ?><br>
            <?php if (strlen($billing_address['line2']) > 0) : ?>
                <?php echo htmlspecialchars($billing_address['line2']); ?><br>
            <?php endif; ?>
            <?php echo htmlspecialchars($billing_address['city']); ?>, <?php
                                                                        echo htmlspecialchars($billing_address['state']); ?>
            <?php echo htmlspecialchars($billing_address['zipCode']); ?><br>
            <?php echo htmlspecialchars($billing_address['phone']); ?>
        </p>
        <form action="." method="post">
            <input type="hidden" name="action" value="view_address_edit">
            <input type="hidden" name="address_type" value="billing">
            <input class="btn btn-info" type="submit" value="Cập nhật địa chỉ thanh toán">
        </form>
        <?php if (count($orders) > 0) : ?>
            <h2>Đơn hàng của bạn</h2>
            <ul>
                <?php foreach ($orders as $order) :
                    $order_id = $order['orderID'];
                    $order_date = strtotime($order['orderDate']);
                    $order_date = date('M j, Y', $order_date);
                    $url = $app_path . 'account' .
                        '?action=view_order&order_id=' . $order_id;
                ?>
                    <li>
                        Đơn hàng # <a href="<?php echo $url; ?>">
                            <?php echo $order_id; ?></a> đã đặt vào
                        <?php echo $order_date; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
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