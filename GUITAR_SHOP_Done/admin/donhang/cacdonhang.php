<?php include 'view/header.php'; ?>
<?php include 'view/sidebar_admin.php'; ?>
<main>
    <h1>Đơn đặt hàng nổi bật</h1>
    <?php if (count($new_orders) > 0) : ?>
        <ul>
            <?php foreach ($new_orders as $order) :
                $order_id = $order['orderID'];
                $order_date = strtotime($order['orderDate']);
                $order_date = date('M j, Y', $order_date);
                $url = $app_path . 'admin/donhang' .
                    '?action=view_order&amp;order_id=' . $order_id;
            ?>
                <li>
                    <a href="<?= $url; ?>">Đơn hàng #
                        <?= $order_id; ?></a> của
                    <?= $order['firstName'] . ' ' .
                        $order['lastName']; ?> đặt hàng vào
                    <?= $order_date; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>Không có đơn đặt hàng chờ giao (vận chuyển) nào.</p>
    <?php endif; ?>
    <h1>Các đơn hàng đã giao</h1>
    <?php if (count($old_orders) > 0) : ?>
        <ul>
            <?php foreach ($old_orders as $order) :
                $order_id = $order['orderID'];
                $order_date = strtotime($order['orderDate']);
                $order_date = date('M j, Y', $order_date);
                $url = $app_path . 'admin/donhang' .
                    '?action=view_order&amp;order_id=' . $order_id;
            ?>
                <li>
                    <a href="<?= $url; ?>">Đơn hàng #
                        <?= $order_id; ?></a> của
                    <?= htmlspecialchars($order['firstName']) . ' ' .
                        htmlspecialchars($order['lastName']); ?> đặt hàng vào
                    <?= $order_date; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>Không có đơn đặt hàng đã giao nào.</p>
    <?php endif; ?>
</main>
<?php include 'view/footer.php'; ?>