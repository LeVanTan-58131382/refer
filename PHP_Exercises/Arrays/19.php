Viết một hàm PHP để sắp xếp các mảng con

<?php
function sort_subnets($x, $y)
{
    $x_arr = explode('.', $x);
    $y_arr = explode('.', $y);
    foreach (range(0, 3) as $i) {
        if ($x_arr[$i] < $y_arr[$i]) {
            return -1;
        } elseif ($x_arr[$i] > $y_arr[$i]) {
            return 1;
        }
    }
    return -1;
}

$subnet_list =
    array(
        '192.169.12',
        '192.167.11',
        '192.169.14',
        '192.168.13',
        '192.167.12',
        '122.169.15',
        '192.167.16'
    );
usort($subnet_list, 'sort_subnets');
print_r($subnet_list);
//Array ( [0] => 122.169.15 [1] => 192.167.11 [2] => 192.167.12 [3] => 192.167.16 [4] => 192.168.13 [5] => 192.169.12 [6] => 192.169.14 )
?>