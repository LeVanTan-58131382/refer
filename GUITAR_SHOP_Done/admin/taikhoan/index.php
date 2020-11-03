<?php
require_once('../../util/main.php');
require_once('util/secure_conn.php');
require_once('model/admin_db.php');
require_once('model/fields.php');
require_once('model/validate.php');


$action = filter_input(INPUT_POST, 'action');

if (admin_count() == 0) {
    if ($action != 'them') {
        $action = 'xem_taikhoan';
    }
} elseif (isset($_SESSION['admin'])) {
    if ($action == null) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action == null) {
            $action = 'xem_taikhoan';
        }
    }
} elseif ($action == 'dangnhap') {
    $action = 'dangnhap';
} else {
    $action = 'view_login';
}

// Set up all possible fields to validate
$validate = new Validate();
$fields = $validate->getFields();

// dùng cho trang thêm tài khoản và các trang khác
$fields->addField('email', 'Phải là email hợp lệ.');
$fields->addField('password_1');
$fields->addField('password_2');
$fields->addField('first_name');
$fields->addField('last_name');

// dùng cho trang đăng nhập
$fields->addField('password');

switch ($action) {
    case 'view_login':
        // Xóa dữ liệu đăng nhập trên form
        $email = '';
        $password = '';
        $password_message = '';

        include 'taikhoan_dangnhap.php';
        break;
    case 'dangnhap':
        // Lấy username và password người dùng nhập
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        // Xác thực dữ liệu người dùng qua các trường     
        $validate->email('email', $email);
        $validate->text('password', $password, true, 6, 30);

        // Nếu xác thực các trường có lỗi thì quay lại trang đăng nhập và thoát khỏi controller switch case này
        if ($fields->hasErrors()) {
            include 'admin/taikhoan/taikhoan_dangnhap.php';
            break;
        }

        // Kiểm tra cơ sở dữ liệu, nếu username và password hợp lệ, cho đăng nhập
        if (xac_nhan_admin_dang_nhap($email, $password)) {
            $_SESSION['admin'] = get_admin_by_email($email);
        } else {
            $password_message = 'Login failed. Invalid email or password.';
            include 'admin/taikhoan/taikhoan_dangnhap.php';
            break;
        }

        // Hiển thị Menu trang Admin (Thêm sửa xóa)
        redirect('..');
        break;
    case 'xem_taikhoan':
        // Lấy tất cả tài khoản admin từ database
        $admins = get_all_admins();

        // Set up variables for add form
        $email = '';
        $first_name = '';
        $last_name = '';
        if (!isset($email_message)) {
            $email_message = '';
        }
        if (!isset($password_message)) {
            $password_message = '';
        }

        // Xem tài khoản admin
        include 'taikhoan_xem.php';
        break;
    case 'them':
        // Lấy dữ liệu người dùng của admin
        $email = filter_input(INPUT_POST, 'email');
        $first_name = filter_input(INPUT_POST, 'first_name');
        $last_name = filter_input(INPUT_POST, 'last_name');
        $password_1 = filter_input(INPUT_POST, 'password_1');
        $password_2 = filter_input(INPUT_POST, 'password_2');

        $admins = get_all_admins();
        $email_message = '';
        $password_message = '';

        // Xác thực dữ liệu người dùng của admin
        $validate->email('email', $email);
        $validate->text('first_name', $first_name);
        $validate->text('last_name', $last_name);
        $validate->text('password_1', $password_1, true, 6, 30);
        $validate->text('password_2', $password_2, true, 6, 30);

        // Nếu xác thực các trường có lỗi thì quay lại trang đăng nhập và thoát khỏi controller switch case này
        if ($fields->hasErrors()) {
            include 'admin/taikhoan/taikhoan_xem.php';
            break;
        }

        // Nếu email đã được sử dụng
        if (xac_nhan_email_admin($email)) {
            $email_message = 'Email này đã được sử dụng.';
            include 'admin/taikhoan/taikhoan_xem.php';
            break;
        }

        // Nếu nhập lại mật khẩu không đúng
        if ($password_1 !== $password_2) {
            $password_message = 'Mật khẩu không phù hợp.';
            include 'admin/taikhoan/taikhoan_xem.php';
            break;
        }

        // Thêm admin
        $admin_id = them_admin(
            $email,
            $first_name,
            $last_name,
            $password_1
        );

        // Set admin trong session
        if (!isset($_SESSION['admin'])) {
            $_SESSION['admin'] = get_admin($admin_id);
        }

        redirect('.');
        break;

    case 'view_edit':
        // Lấy dữ liệu admin
        $admin_id = filter_input(INPUT_POST, 'admin_id', FILTER_VALIDATE_INT);
        $admin = get_admin($admin_id);
        $first_name = $admin['firstName'];
        $last_name = $admin['lastName'];
        $email = $admin['emailAddress'];
        $password_message = '';

        // Hiển thị trang cập nhật
        include 'taikhoan_capnhat.php';
        break;

    case 'update':
        $admin_id = filter_input(INPUT_POST, 'admin_id', FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, 'email');
        $first_name = filter_input(INPUT_POST, 'first_name');
        $last_name = filter_input(INPUT_POST, 'last_name');
        $password_1 = filter_input(INPUT_POST, 'password_1');
        $password_2 = filter_input(INPUT_POST, 'password_2');

        // Xác thực dữ liệu admin nhập vào
        $validate->email('email', $email);
        $validate->text('first_name', $first_name);
        $validate->text('last_name', $last_name);
        $validate->text('password_1', $password_1, false, 6, 30);
        $validate->text('password_2', $password_2, false, 6, 30);

        // Nếu xác thực các trường có lỗi thì quay lại trang đăng nhập và thoát khỏi controller switch case này
        if ($fields->hasErrors()) {
            include 'admin/taikhoan/taikhoan_capnhat.php';
            break;
        }

        if ($password_1 !== $password_2) {
            $password_message = 'Passwords do not match.';
            include 'admin/taikhoan/taikhoan_capnhat.php';
            break;
        }

        update_admin(
            $admin_id,
            $email,
            $first_name,
            $last_name,
            $password_1,
            $password_2
        );

        if ($admin_id == $_SESSION['admin']['adminID']) {
            $_SESSION['admin'] = get_admin($admin_id);
        }
        redirect($app_path . 'admin/taikhoan/.?action=view_account');
        break;

    case 'view_delete_confirm':
        $admin_id = filter_input(INPUT_POST, 'admin_id', FILTER_VALIDATE_INT);
        if ($admin_id == $_SESSION['admin']['adminID']) {
            display_error('Bạn không thể xóa tài khoản của mình.');
        }
        $admin = get_admin($admin_id);
        $first_name = $admin['firstName'];
        $last_name = $admin['lastName'];
        $email = $admin['emailAddress'];
        include 'taikhoan_xoa.php';
        break;

    case 'xoa':
        $admin_id = filter_input(INPUT_POST, 'admin_id', FILTER_VALIDATE_INT);
        delete_admin($admin_id);
        redirect($app_path . 'admin/taikhoan');
        break;

    case 'dangxuat':
        unset($_SESSION['admin']);
        redirect($app_path . 'admin/taikhoan');
        break;
    default:
        display_error('Unknown account action: ' . $action);
        break;
}
