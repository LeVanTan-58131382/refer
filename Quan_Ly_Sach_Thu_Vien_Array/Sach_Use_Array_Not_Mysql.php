<?php
//get tasklist array from POST
$list_sach = filter_input(
    INPUT_POST,
    'sach_list',
    FILTER_DEFAULT,
    FILTER_REQUIRE_ARRAY
);
if ($list_sach === NULL) {
    $list_sach = array();
}

//lấy biến action từ POST
$action = filter_input(INPUT_POST, 'action');

//initialize error messages array
$errors = array();

// process - xử lý
switch ($action) {
    case 'add':
        $ten_sach_moi = filter_input(INPUT_POST, 'ten_sach');
        if (empty($ten_sach_moi)) {
            $errors[] = 'Nhiệm vụ mới không được để trống.';
        } else {
            $list_sach[] = $ten_sach_moi; // thêm nhiệm vụ mới vào danh sách Sách
        }
        break;
    case 'delete':
        $sach_index = filter_input(INPUT_POST, 'sach_id', FILTER_VALIDATE_INT);
        if ($sach_index === NULL || $sach_index === FALSE) {
            $errors[] = 'Không thể Xóa Sách.';
        } else {
            unset($list_sach[$sach_index]);
            $list_sach = array_values($list_sach);
        }
        break;
}

?>

// Trang hiển thị
<!DOCTYPE html>
<html>

<head>
    <title>Quản Lý Danh Sách Sách Trong Thư Viện</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <header>
        <h1>Quản Lý Danh Sách Sách Trong Thư Viện</h1>
    </header>
    <main>
        <!-- part 1: the errors -->
        <?php if (count($errors) > 0) : ?>
            <h2>Các lỗi xảy ra</h2>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?php echo htmlspecialchars($error); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <!-- part 2: the tasks -->
        <h2>Danh sách Sách trong Thư viện</h2>
        <?php if (count($list_sach) == 0) : ?>
            <p>Không có Sách nào trong Thư viện.</p>
        <?php else : ?>
            <ul>
                <?php foreach ($list_sach as $id => $sach) : ?>
                    <li><?php echo $id + 1 . '. ' .
                            htmlspecialchars($sach); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <br>

        <!-- part 3: the add form -->
        <h2>Thêm Sách vào Thư viện</h2>
        <form action="" method="post">
            <?php foreach ($list_sach as $sach) : ?>
                <input type="hidden" name="sach_list[]" value="<?php echo htmlspecialchars($sach); ?>">
            <?php endforeach; ?>
            <input type="hidden" name="action" value="add">
            <label>Nhiệm vụ:</label>
            <input type="text" name="ten_sach" placeholder="Nhập tên sách..."><br>
            <label>&nbsp;</label>
            <input type="submit" value="Thêm Sách"><br>
        </form>
        <br>

        <!-- part 4: the delete form -->
        <?php if (count($list_sach) > 0) : ?>
            <h2>Xóa Sách khỏi Thư viện</h2>
            <form action="" method="post">
                <?php foreach ($list_sach as $sach) : ?>
                    <input type="hidden" name="sach_list[]" value="<?php echo htmlspecialchars($sach); ?>">
                <?php endforeach; ?>
                <input type="hidden" name="action" value="delete">
                <label>Sách:</label>
                <select name="sach_id">
                    <?php foreach ($list_sach as $id => $sach) : ?>
                        <option value="<?php echo $id; ?>">
                            <?php echo htmlspecialchars($sach); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <br>
                <label>&nbsp;</label>
                <input type="submit" value="Xóa Sách">
            </form>
        <?php endif; ?>
    </main>
</body>

</html>




GIẢI THÍCH:

Cú pháp: unset( $var);
Trong đó:
$var là biến cần loại bỏ.
// loại bỏ phần tử của mảng
$arr = [
"php",
"html",
"css"
];
unset($arr[1]);