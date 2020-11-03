<!DOCTYPE html>
<html>

<head>
    <title>Quản Lý Danh Sách Nhiệm Vụ</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <header>
        <h1>Quản Lý Danh Sách Nhiệm Vụ</h1>
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
        <h2>Những nhiệm vụ</h2>
        <?php if (count($danh_sach_nhiem_vu) == 0) : ?>
            <p>Không có nhiệm vụ nào trong danh sách nhiệm vụ.</p>
        <?php else : ?>
            <ul>
                <?php foreach ($danh_sach_nhiem_vu as $id => $nhiemvu) : ?>
                    <li><?php echo $id + 1 . '. ' .
                            htmlspecialchars($nhiemvu); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <br>

        <!-- part 3: the add form -->
        <h2>Thêm nhiệm vụ</h2>
        <form action="." method="post">
            <?php foreach ($danh_sach_nhiem_vu as $nhiemvu) : ?>
                <input type="hidden" name="tasklist[]" value="<?php echo htmlspecialchars($nhiemvu); ?>">
            <?php endforeach; ?>
            <input type="hidden" name="action" value="add">
            <label>Nhiệm vụ:</label>
            <input type="text" name="task" placeholder="Nhập tên nhiện vụ..."><br>
            <label>&nbsp;</label>
            <input type="submit" value="Thêm nhiệm vụ"><br>
        </form>
        <br>

        <!-- part 4: the delete form -->
        <?php if (count($danh_sach_nhiem_vu) > 0) : ?>
            <h2>Xóa nhiệm vụ</h2>
            <form action="." method="post">
                <?php foreach ($danh_sach_nhiem_vu as $nhiemvu) : ?>
                    <input type="hidden" name="tasklist[]" value="<?php echo htmlspecialchars($nhiemvu); ?>">
                <?php endforeach; ?>
                <input type="hidden" name="action" value="delete">
                <label>Nhiệm vụ:</label>
                <select name="taskid">
                    <?php foreach ($danh_sach_nhiem_vu as $id => $nhiemvu) : ?>
                        <option value="<?php echo $id; ?>">
                            <?php echo htmlspecialchars($nhiemvu); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <br>
                <label>&nbsp;</label>
                <input type="submit" value="Xóa nhiệm vụ">
            </form>
        <?php endif; ?>
    </main>
</body>

</html>