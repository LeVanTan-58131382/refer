<aside>
    <h2>Links</h2>
    <ul>
        <li>
            <?php
            // Check if user is logged in and
            // display appropriate account links
            $account_url = $app_path . 'admin/taikhoan';
            $logout_url = $account_url . '?action=dangxuat';
            if (isset($_SESSION['admin'])) :
            ?>
                <a href="<?= $logout_url; ?>">Đăng xuất</a>
            <?php else : ?>
                <a href="<?= $account_url; ?>">Đăng nhập</a>
            <?php endif; ?>
        </li>
        <li>
            <a href="<?= $app_path; ?>">Trang chủ</a>
        </li>
        <li>
            <a href="<?= $app_path; ?>admin">Admin</a>
        </li>
    </ul>

    <?php if (isset($categories)) : ?>
        <!-- display links for all categories -->
        <h2>Categories</h2>
        <ul>
            <?php foreach ($categories as $category) : ?>
                <li>
                    <a href="<?= $app_path .
                                    'admin/sanpham?action=danhsach_sanpham' .
                                    '&amp;category_id=' . $category['categoryID']; ?>">
                        <?= htmlspecialchars($category['categoryName']); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</aside>