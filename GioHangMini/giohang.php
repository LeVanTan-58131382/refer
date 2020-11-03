<?php
if (!isset($_SESSION['giohang'])) {
    $_SESSION['giohang'] = array();
}

$cac_mat_hang = array();
$cac_mat_hang[] = [
    "id" => 1,
    "ten" => "Laptop Dell",
    "gia" => 15000000
];
$cac_mat_hang[] = [
    "id" => 2,
    "ten" => "Iphone 12",
    "gia" => 18000000
];
$cac_mat_hang[] = [
    "id" => 3,
    "ten" => "Apple Watch",
    "gia" => 10000000
];
$cac_mat_hang[] = [
    "id" => 4,
    "ten" => "Xe đồ chơi",
    "gia" => 150000
];

function lay_mathang_bang_id($ma_mat_hang)
{
    $mat_hang_can_lay = array();
    foreach ($cac_mat_hang as $mat_hang) {
        if ($mat_hang["id"] == $ma_mat_hang) {
            $mat_hang_can_lay = $mat_hang;
        }
    }
}

//var_dump($cac_mat_hang);

?>

<div class="danhsachmathang">
    <?php foreach ($cac_mat_hang as $mat_hang) { ?>
        <div class="mathang">
            <h4>Mã: </h4>
            <p><?= $mat_hang["id"]; ?></p>
            <h4>Tên:</h4>
            <p><?= $mat_hang["ten"]; ?></p>
            <form action="" method="get">
                <input type="hidden" name="ma" value="<?= $mat_hang["id"]; ?>">
                <input type="hidden" name="action" value="themvaogio">
                <input type="submit" value="Thêm vào giỏ">
            </form>
        </div>
    <?php } ?>
</div>

<div class="giohang">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mã</th>
                <th>Tên mặt hàng</th>
                <th>Số lượng</th>
                <th>Giá tiền</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
            </tr>
        </tbody>
    </table>
</div>

<style>
    .danhsachmathang {
        position: relative;
        width: 500px;
        height: 500px;
        border: 1px solid green;
        margin: 20px;
    }

    .mathang {
        position: relative;
        width: 40%;
        height: 200px;
        float: left;
        border: 1px solid red;
        margin: 10px;
        padding: 10px;
    }

    .giohang {
        position: absolute;
        width: 500px;
        height: 500px;
        border: 1px solid green;
        right: 0;
        top: 0;
        margin: 20px;
    }
</style>

<?php
// Các thao tác với session giỏ hàng
// Thêm một mặt hàng vào giỏ hàng
function giohang_them_mathang($ma_mat_hang)
{
    $_SESSION['giohang']["ma_" . $ma_mat_hang] = 9; // đã thêm một mặt hàng mới mã mặt hàng với số lượng ban đầu là 1 vào giỏ, 
}

// Cập nhật một mặt hàng trong giỏ hàng
function giohang_capnhat_mathang($ma_mat_hang, $so_luong)
{
    if (isset($_SESSION['giohang'][$ma_mat_hang])) {
        $_SESSION['giohang'][$ma_mat_hang] = round($so_luong, 0);
    }
}

// Xóa một mặt hàng khỏi giỏ hàng
function giohang_xoa_mathang($ma_mat_hang)
{
    if (isset($_SESSION['giohang'][$ma_mat_hang])) {
        unset($_SESSION['giohang'][$ma_mat_hang]);
    }
}


// Get the number of products in the cart
function cart_product_count()
{
    return count($_SESSION['cart']);
}

// Get the number of items in the cart
function cart_item_count()
{
    // $count = 0;
    // $cart = cart_get_items();
    // foreach ($cart as $item) {
    //     $count += $item['quantity'];
    // }
    // return $count;
}

// Get the subtotal for the cart
function cart_subtotal()
{
    // $subtotal = 0;
    // //$cart = cart_get_items();
    // foreach ($cart as $item) {
    //     $subtotal += $item['unit_price'] * $item['quantity'];
    // }
    // return $subtotal;
}

// Remove all items from the cart
function clear_cart()
{
    $_SESSION['cart'] = array();
}

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}
switch ($action) {
    case 'themvaogio':
        $ma_mat_hang = filter_input(INPUT_GET, 'ma', FILTER_VALIDATE_INT);

        echo $ma_mat_hang;

        giohang_them_mathang($ma_mat_hang);
        //echo ($_SESSION['giohang']["ma_2"]);
        echo ($_SESSION['giohang']["ma_3"]);

        //echo ($_SESSION['giohang'][2]); dòng này in ra số lượng ban đầu của mặt hàng có mã là 2

        foreach ($_SESSION['giohang'] as $soluong) {
            //echo $soluong;
        }
        $cac_mat_hang_trong_gio = array();
        // foreach ($_SESSION['giohang'] as $ma => $soluong) {
        //     // Get product data from db
        //     $mat_hang_can_lay = array();
        //     foreach ($cac_mat_hang as $mat_hang) {
        //         if ($mat_hang["id"] == $ma_mat_hang) {
        //             $mat_hang_can_lay = $mat_hang;
        //         }
        //     }
        //     $gia = $mat_hang_can_lay['gia'];

        //     // Store data in items array
        //     $cac_mat_hang_trong_gio[$ma]['ten'] = $mat_hang_can_lay['ten'];
        //     $cac_mat_hang_trong_gio[$ma]['gia'] = $mat_hang_can_lay['gia'];
        //     $cac_mat_hang_trong_gio[$ma]['sohluong'] = $product['description'];
        // }
        // return $cac_mat_hang_trong_gio;
        // break;
    case 'update':
        // $items = filter_input(
        //     INPUT_POST,
        //     'items',
        //     FILTER_DEFAULT,
        //     FILTER_REQUIRE_ARRAY
        // );
        // foreach ($items as $product_id => $quantity) {
        //     if ($quantity == 0) {
        //         cart_remove_item($product_id);
        //     } else {
        //         cart_update_item($product_id, $quantity);
        //     }
        // }
        // $cart = cart_get_items();
        // break;
    default:

        break;
}




?>