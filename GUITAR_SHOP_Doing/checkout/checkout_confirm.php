<?php include '../view/header.php'; ?>
<?php include '../view/sidebar.php'; ?>

<div class="ad-part-content">
    <div class="noidungcon">

        <h1>Xác nhận đơn hàng</h1>
        <table id="cart" class="table table-bordered table-hover">
            <tr id="cart_header">
                <th class="left">Mặt hàng</th>
                <th class="right">Giá</th>
                <th class="right">Số lượng</th>
                <th class="right">Tổng tiền</th>
            </tr>
            <?php foreach ($cart as $product_id => $item) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['name']); ?></td>
                    <td class="right">
                        <?php echo sprintf('$%.2f', $item['unit_price']); ?>
                    </td>
                    <td class="right">
                        <?php echo $item['quantity']; ?>
                    </td>
                    <td class="right">
                        <?php echo sprintf('$%.2f', $item['line_price']); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr id="cart_footer">
                <td colspan="3" class="right"><b>Tổng phụ</b></td>
                <td class="right">
                    <?php echo sprintf('$%.2f', $subtotal); ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="right"><?php echo $state; ?> Tax</td>
                <td class="right">
                    <?php echo sprintf('$%.2f', $tax); ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="right">Phí giao hàng</td>
                <td class="right">
                    <?php echo sprintf('$%.2f', $shipping_cost); ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="right"><b>Tổng tiền</b></td>
                <td class="right">
                    <?php echo sprintf('$%.2f', $total); ?>
                </td>
            </tr>
        </table>
        <p>
            Tiến hành: <a href="<?php echo '?action=payment'; ?>">Thanh toán</a>
        </p>
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