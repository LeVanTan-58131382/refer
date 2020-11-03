<?php
//get tasklist array from POST
$danh_sach_nhiem_vu = filter_input(
    INPUT_POST,
    'tasklist',
    FILTER_DEFAULT,
    FILTER_REQUIRE_ARRAY
);
if ($danh_sach_nhiem_vu === NULL) {
    $danh_sach_nhiem_vu = array();
}

//lấy biến action từ POST
$action = filter_input(INPUT_POST, 'action');

//initialize error messages array
$errors = array();

//process
switch ($action) {
    case 'add':
        $ten_nhiemvu_moi = filter_input(INPUT_POST, 'task');
        if (empty($ten_nhiemvu_moi)) {
            $errors[] = 'Nhiệm vụ mới không được để trống.';
        } else {
            $danh_sach_nhiem_vu[] = $ten_nhiemvu_moi; // thêm nhiệm vụ mới vào danh sách nhiệm vụ
        }
        break;
    case 'delete':
        $task_index = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
        if ($task_index === NULL || $task_index === FALSE) {
            $errors[] = 'The task cannot be deleted.';
        } else {
            unset($danh_sach_nhiem_vu[$task_index]);
            $danh_sach_nhiem_vu = array_values($danh_sach_nhiem_vu);
        }
        break;
}
include('danh_sach_nhiem_vu.php');
