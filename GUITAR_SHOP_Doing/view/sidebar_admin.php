<!-- <aside>
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
        <!-- display links for all categories
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
</aside> -->

<!-- new layout -->
<div class="ad-part-left">
    <ul>
        <a href="<?= $app_path; ?>">
            <li id="li1">Trang chủ</li>
        </a>

        <?php if (isset($_SESSION['admin'])) { ?>
            <a href="<?= $app_path; ?>admin">
                <li id="li2">Admin</li>
            </a>
            <a href="<?= $app_path; ?>admin/sanpham">
                <li id="li3">Quản Lý Sản Phẩm</li>
            </a>
            <a href="<?= $app_path; ?>admin/loaisanpham">
                <li id="li4">Quản Lý Loại Sản Phẩm</li>
            </a>
            <a href="<?= $app_path; ?>admin/donhang">
                <li id="li5">Quản Lý Đơn Hàng</li>
            </a>
            <a href="<?= $app_path; ?>admin/taikhoan">
                <li id="li6">Quản Lý Tài Khoản</li>
            </a>
            <a href="">
                <li id="li7">Chức Năng Khác</li>
            </a>
        <?php } ?>
    </ul>
</div>
<div class="ad-part-right">
    <div class="ad-menu-right">
        <ul>
            <li id="li8">Welcome</li>
            <a href="">
                <li id="li9">Chức năng khác</li>
            </a>
            <a href="">
                <li id="li10">Chức năng khác</li>
            </a>
            <a href="
            <?php
            // nếu admin đang đăng nhập thì hiển thị nút đăng xuất và ngược lại
            $account_url = $app_path . 'admin/taikhoan';
            $logout_url = $account_url . '?action=dangxuat';
            if (isset($_SESSION['admin'])) {
                echo $logout_url;
            } else {
                echo $account_url;
            }
            ?>">
                <li id="li11" style="padding: 0px">
                    <button type="submit" class="nutdangxuat">
                        <?php if (isset($_SESSION['admin'])) {
                            echo "Đăng xuất";
                        } else {
                            echo "Đăng nhập";
                        } ?>
                    </button>
                </li>
            </a>

        </ul>
    </div>