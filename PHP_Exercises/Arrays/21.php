Viết một chương trình PHP để sắp xếp một mảng nhiều chiều được thiết lập bởi một khóa cụ thể

<?php
function column_Sort($unsorted, $column)
{
    $sorted = $unsorted;
    for ($i = 0; $i < sizeof($sorted) - 1; $i++) {
        for ($j = 0; $j < sizeof($sorted) - 1 - $i; $j++)
            if ($sorted[$j][$column] > $sorted[$j + 1][$column]) {
                $tmp = $sorted[$j];
                $sorted[$j] = $sorted[$j + 1];
                $sorted[$j + 1] = $tmp;
            }
    }
    return $sorted;
}
$my_array = array();
$my_array[0]['name'] = 'Sana';
$my_array[0]['email'] = 'sana@example.com';
$my_array[0]['phone'] = '111-111-1234';
$my_array[0]['country'] = 'USA';

$my_array[1]['name'] = 'Robin';
$my_array[1]['email'] = 'robin@example.com';
$my_array[1]['phone'] = '222-222-1235';
$my_array[1]['country'] = 'UK';

$my_array[2]['name'] = 'Sofia';
$my_array[2]['email'] = 'sofia@example.com';
$my_array[2]['phone'] = '333-333-1236';
$my_array[2]['country'] = 'India';

print_r(column_Sort($my_array, 'name'));
?>