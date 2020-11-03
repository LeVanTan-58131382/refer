<?php include 'view/header.php'; ?>
<?php include 'view/sidebar_admin.php'; ?>
<main>
    <h1>Thông tin đơn hàng</h1>
    <p>Mã số đơn hàng: <?= $order_id; ?></p>
    <p>Ngày đặt hàng: <?= $order_date; ?></p>
    <p>Khách hàng: <?= htmlspecialchars($name) . ' (' .
                        htmlspecialchars($email) . ')'; ?></p>
    <h2>Đang chuyển hàng</h2>
    <?php if ($order['shipDate'] === NULL) : ?>
        <p>Ngày vận chuyển: Chưa được vận chuyển</p>
        <form action="." method="post">
            <input type="hidden" name="action" value="van_chuyen_hom_nay">
            <input type="hidden" name="order_id" value="<?= $order_id; ?>">
            <input type="submit" value="Vận chuyển đơn hàng">
        </form>
        <form action="." method="post">
            <input type="hidden" name="action" value="xac_nhan_xoa_don_hang">
            <input type="hidden" name="order_id" value="<?= $order_id; ?>">
            <input type="submit" value="Delete Order">
        </form>

    <?php else :
        $ship_date = date('M j, Y', strtotime($order['shipDate']));
    ?>
        <p>Ngày vận chuyển (giao): <?= $ship_date; ?></p>
    <?php endif; ?>
    <p><?= htmlspecialchars($ship_line1); ?><br>
        <?php if (strlen($ship_line2) > 0) : ?>
            <?= htmlspecialchars($ship_line2); ?><br>
        <?php endif; ?>
        <?= htmlspecialchars($ship_city); ?>, <?php
                                                echo htmlspecialchars($ship_state); ?>
        <?= htmlspecialchars($ship_zip); ?><br>
        <?= htmlspecialchars($ship_phone); ?>
    </p>
    <h2>Thanh toán</h2>
    <p>Số thẻ: <?= htmlspecialchars($card_number) . ' (' .
                    htmlspecialchars($card_name) . ')'; ?></p>
    <p>Thẻ hết hạn: <?= htmlspecialchars($card_expires); ?></p>
    <p><?= htmlspecialchars($bill_line1); ?><br>
        <?php if (strlen($bill_line2) > 0) : ?>
            <?= htmlspecialchars($bill_line2); ?><br>
        <?php endif; ?>
        <?= htmlspecialchars($bill_city); ?>, <?php
                                                echo htmlspecialchars($bill_state); ?>
        <?= htmlspecialchars($bill_zip); ?><br>
        <?= htmlspecialchars($bill_phone); ?>
    </p>
    <h2>Đơn hàng các mặt hàng</h2>
    <table id="cart">
        <tr id="cart_header">
            <th class="left">Tên mặt hàng</th>
            <th class="right">Bảng giá</th>
            <th class="right">Tiết kiệm</th>
            <th class="right">Giá của bạn</th>
            <th class="right">Số lượng</th>
            <th class="right">Tổng dòng</th>
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
                <td><?= htmlspecialchars($item_name); ?></td>
                <td class="right">
                    <?= sprintf('$%.2f', $list_price); ?>
                </td>
                <td class="right">
                    <?= sprintf('$%.2f', $savings); ?>
                </td>
                <td class="right">
                    <?= sprintf('$%.2f', $your_cost); ?>
                </td>
                <td class="right">
                    <?= $quantity; ?>
                </td>
                <td class="right">
                    <?= sprintf('$%.2f', $line_total); ?>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr id="cart_footer">
            <td colspan="5" class="right">Subtotal:</td>
            <td class="right">
                <?= sprintf('$%.2f', $subtotal); ?>
            </td>
        </tr>
        <tr>
            <td colspan="5" class="right">
                <?= htmlspecialchars($ship_state); ?> Tax:
            </td>
            <td class="right">
                <?= sprintf('$%.2f', $order['taxAmount']); ?>
            </td>
        </tr>
        <tr>
            <td colspan="5" class="right">Shipping:</td>
            <td class="right">
                <?= sprintf('$%.2f', $order['shipAmount']); ?>
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
</main>
<?php include 'view/footer.php'; ?>