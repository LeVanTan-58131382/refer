<aside>
    <h2>Links</h2>
    <ul>
        <li>
            <a href="<?= $app_path . 'cart'; ?>">Xem giỏ hàng</a>
        </li>
        <?php
        // Check if user is logged in and
        // display appropriate account links
        $account_url = $app_path . 'account';
        $logout_url = $account_url . '?action=logout';
        if (isset($_SESSION['user'])) :
        ?>
            <li><a href="<?= $account_url; ?>">Tài khoản của tôi</a></li>
            <li><a href="<?= $logout_url; ?>">Đăng xuất</a>
            <?php else : ?>
            <li><a href="<?= $account_url; ?>">Đăng nhập/Đăng ký</a></li>
        <?php endif; ?>
        <li>
            <a href="<?= $app_path; ?>">Trang chủ</a>
        </li>
    </ul>

    <h2>Loại sản phẩm</h2>
    <ul>
        <!-- display links for all categories -->
        <?php
        require_once('model/database.php');
        require_once('model/category_db.php');

        $categories = get_categories();
        foreach ($categories as $category) :
            $name = $category['categoryName'];
            $id = $category['categoryID'];
            $url = $app_path . 'catalog?category_id=' . $id;
        ?>
            <li>
                <a href="<?= $url; ?>">
                    <?= htmlspecialchars($name); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Temp Link</h2>
    <ul>
        <li>
            <!-- This link is for testing only.
                 Remove it from a production application. -->
            <a href="<?= $app_path; ?>admin/taikhoan?action=dangnhap">Trang Admin</a>
        </li>
    </ul>
</aside>