<?php
require_once('../util/main.php');
require_once('../model/category_db.php');

$action = strtolower(filter_input(INPUT_POST, 'action'));

if ($action == NULL) {
    $action = strtolower(filter_input(INPUT_GET, 'action'));
    if ($action == NULL) {
        $action = 'danhsach_loaisanpham';
    }
}

switch ($action) {
    case 'danhsach_loaisanpham':
        // get categories
        $categories = get_categories();

        // display product list
        include('type_product.php');
        break;
};
