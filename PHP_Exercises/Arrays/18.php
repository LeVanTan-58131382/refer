Viết một hàm PHP để sắp xếp một mảng theo một mảng khác hoạt động như một danh sách ưu tiên.
<?php
function list_cmp($a, $b)
{
    global $order;

    foreach ($order as $key => $value) {
        if ($a == $value) {
            return 0;
            break;
        }

        if ($b == $value) {
            return 1;
            break;
        }
    }
}

$order[0] = 1;
$order[1] = 3;
$order[2] = 4;
$order[3] = 2;

$array[0] = 2;
$array[1] = 1;
$array[2] = 3;
$array[3] = 4;
$array[4] = 2;
$array[5] = 1;
$array[6] = 2;

usort($array, "list_cmp");

print_r($array);
//Array ( [0] => 1 [1] => 1 [2] => 3 [3] => 4 [4] => 2 [5] => 2 [6] => 2 )
?>


Hàm usort() : Sắp xếp các phần tử của mảng $a bằng hàm so sánh do người dùng xác định
Ví dụ:
<?php
function my_sort($a, $b)
{
    if ($a == $b) return 0;
    return ($a < $b) ? -1 : 1;
}

$a = array(4, 2, 8, 6);
usort($a, "my_sort");
?>