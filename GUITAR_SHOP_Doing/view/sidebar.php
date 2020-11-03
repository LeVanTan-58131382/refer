<div class="ad-part-left">
    <ul>
        <a href="<?= $app_path; ?>">
            <li id="li1">Trang chủ</li>
        </a>

        <a href="<?= $app_path . 'cart'; ?>">
            <li id="li2">Xem giỏ hàng</li>
        </a>

        <?php
        // Nếu khách hàng đang đăng nhập thì hiển thị "TK của tôi" và "Đăng xuất", còn không thì hiển thị ĐK
        $account_url = $app_path . 'account';
        $logout_url = $account_url . '?action=logout';
        if (isset($_SESSION['user'])) :
        ?>
            <a href="<?= $account_url; ?>">
                <li id="li3">Tài khoản của tôi</li>
            </a>
            <a href="<?= $logout_url; ?>">
                <li id="li4">Đăng xuất</li>
            </a>
        <?php else : ?>
            <a href="<?= $account_url; ?>">
                <li id="li5">Đăng nhập/Đăng ký</li>
            </a>
        <?php endif; ?>

        <a href="<?= $app_path; ?>admin/taikhoan?action=dangnhap">
            <li id="li6">Admin</li>
        </a>
        <a href="<?= $app_path; ?>products_by_type?action=danhsach_loaisanpham">
            <li id="li7">Loại sản phẩm</li>
        </a>
    </ul>
</div>
<div class="ad-part-right">
    <div class="ad-menu-right">
        <ul>
            <li id="li13">Welcome</li>
            <a href="">
                <li id="li14">Chức năng khác</li>
            </a>
            <a href="">
                <li id="li15">Chức năng khác</li>
            </a>

            <?php
            // nếu admin đang đăng nhập thì hiển thị nút đăng xuất và ngược lại
            $account_url = $app_path . 'admin/taikhoan';
            $logout_url = $account_url . '?action=dangxuat';
            if (isset($_SESSION['admin'])) :
            ?>
                <a href="<?= $logout_url; ?>">
                    <li id="li11" style="padding: 0px">
                        <button type="submit" class="nutdangxuat">Đăng xuất</button>
                    </li>
                </a>
            <?php else : ?>
                <a href="<?= $account_url; ?>">
                    <li id="li11" style="padding: 0px">
                        <button type="submit" class="nutdangxuat">Đăng nhập</button>
                    </li>
                </a>
            <?php endif; ?>
        </ul>
    </div>