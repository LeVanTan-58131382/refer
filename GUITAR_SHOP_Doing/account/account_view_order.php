<?php include '../view/header.php'; ?>
<?php include '../view/sidebar.php'; ?>
<div class="ad-part-content">
    <div class="noidungcon">
        <h1>Đơn Hàng của bạn</h1>
        <p>Số đơn: <?php echo $order_id; ?></p>
        <p>Ngày đặt hàng: <?php echo $order_date; ?></p>
        <h2>Giao hàng</h2>
        <p>Ngày giao:
            <?php
            if ($order['shipDate'] === NULL) {
                echo 'Chưa được vận chuyển';
            } else {
                $ship_date = strtotime($order['shipDate']);
                echo date('M j, Y', $ship_date);
            }
            ?>
        </p>
        <p><?php echo htmlspecialchars($shipping_address['line1']); ?><br>
            <?php if (strlen($shipping_address['line2']) > 0) : ?>
                <?php echo htmlspecialchars($shipping_address['line2']); ?><br>
            <?php endif; ?>
            <?php echo htmlspecialchars($shipping_address['city']); ?>, <?php
                                                                        echo htmlspecialchars($shipping_address['state']); ?>
            <?php echo htmlspecialchars($shipping_address['zipCode']); ?><br>
            <?php echo htmlspecialchars($shipping_address['phone']); ?>
        </p>
        <h2>Thanh toán</h2>
        <p>Số thẻ: ...<?php echo substr($order['cardNumber'], -4); ?></p>
        <p><?php echo htmlspecialchars($billing_address['line1']); ?><br>
            <?php if (strlen($billing_address['line2']) > 0) : ?>
                <?php echo htmlspecialchars($billing_address['line2']); ?><br>
            <?php endif; ?>
            <?php echo htmlspecialchars($billing_address['city']); ?>, <?php
                                                                        echo htmlspecialchars($billing_address['state']); ?>
            <?php echo htmlspecialchars($billing_address['zipCode']); ?><br>
            <?php echo htmlspecialchars($billing_address['phone']); ?>
        </p>
        <h2>Đặt hàng các mặt hàng</h2>
        <table id="cart">
            <tr id="cart_header">
                <th class="left">Tên mặt hàng</th>
                <th class="right">Bảng giá</th>
                <th class="right">Tiết kiệm</th>
                <th class="right">Giá cho bạn</th>
                <th class="right">Số lượng</th>
                <th class="right">Tổng tiền</th>
            </tr>
            <?php
            $subtotal = 0;
            foreach ($order_items as $item) :
                $product_id = $item['productID'];
                $product = get_product($product_id);
                $item_name = $product['productName'];
                $list_price = $item['itemPrice'];
                $savings = $item['discountAmount'];
                $your_cost = $list_price - $savings;
                $quantity = $item['quantity'];
                $line_total = $your_cost * $quantity;
                $subtotal += $line_total;
            ?>
                <tr>
                    <td><?php echo htmlspecialchars($item_name); ?></td>
                    <td class="right">
                        <?php echo sprintf('$%.2f', $list_price); ?>
                    </td>
                    <td class="right">
                        <?php echo sprintf('$%.2f', $savings); ?>
                    </td>
                    <td class="right">
                        <?php echo sprintf('$%.2f', $your_cost); ?>
                    </td>
                    <td class="right">
                        <?php echo $quantity; ?>
                    </td>
                    <td class="right">
                        <?php echo sprintf('$%.2f', $line_total); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr id="cart_footer">
                <td colspan="5" class="right">Subtotal:</td>
                <td class="right">
                    <?php echo sprintf('$%.2f', $subtotal); ?>
                </td>
            </tr>
            <tr>
                <td colspan="5" class="right">
                    <?php echo htmlspecialchars($shipping_address['state']); ?> Tax:
                </td>
                <td class="right">
                    <?php echo sprintf('$%.2f', $order['taxAmount']); ?>
                </td>
            </tr>
            <tr>
                <td colspan="5" class="right">Shipping:</td>
                <td class="right">
                    <?php echo sprintf('$%.2f', $order['shipAmount']); ?>
                </td>
            </tr>
            <tr>
                <td colspan="5" class="right">Total:</td>
                <td class="right">
                    <?php
                    $total = $subtotal + $order['taxAmount'] +
                        $order['shipAmount'];
                    echo sprintf('$%.2f', $total);
                    ?>
                </td>
            </tr>
        </table>
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