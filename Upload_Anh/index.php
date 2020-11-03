<?php
require_once 'get_images.php';  // the get_file_list function
require_once 'process_image.php'; // the process_image function

$image_dir = 'images'; // tên thư mục chứ file
$image_dir_path = getcwd() . DIRECTORY_SEPARATOR . $image_dir;
// Hàm getcwd() : Trả về thư mục đang làm việc hiện tại nếu thành công, hoặc FALSE nếu thất bại

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = '';
    }
}

switch ($action) {
    case 'upload':
        if (isset($_FILES['file1'])) {
            $filename = $_FILES['file1']['name'];
            if (empty($filename)) {
                break;
            }
            $source = $_FILES['file1']['tmp_name'];
            $target = $image_dir_path . DIRECTORY_SEPARATOR . $filename;
            move_uploaded_file($source, $target);

            // create the '400' and '100' versions of the image
            process_image($image_dir_path, $filename);
        }
        break;
    case 'delete':
        $filename = filter_input(
            INPUT_GET,
            'filename',
            FILTER_SANITIZE_STRING
        );
        $target = $image_dir_path . DIRECTORY_SEPARATOR . $filename;
        if (file_exists($target)) {
            unlink($target);

            // Hàm unlink() sẽ xóa file dựa vào đường dẫn đã truyền vào
        }
        break;
}

$files = get_file_list($image_dir_path);
include('uploadform.php');
