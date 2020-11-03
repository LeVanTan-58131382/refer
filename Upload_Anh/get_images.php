<?php
function get_file_list($path)
{
    $files = array();
    if (!is_dir($path)) {
        return $files;
    }

    $items = scandir($path);
    foreach ($items as $item) {
        $item_path = $path . DIRECTORY_SEPARATOR . $item;
        if (is_file($item_path)) {
            $files[] = $item;
        }
    }
    return $files;
}
?>

Hàm is_dir() dùng để kiểm tra xem tệp được chỉ định có phải là một thư mục hay không.
Hàm này sẽ trả về giá trị TRUE nếu tệp được chỉ định có tồn tại và nó là một thư mục,
ngược lại sẽ trả về giá trị FALSE.

Hàm scandir(): Hàm này trả về mảng tên file hoặc thư mục trong directory đã cho