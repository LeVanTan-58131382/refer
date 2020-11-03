Viết một đoạn mã PHP để chèn một mục mới vào một mảng ở bất kỳ vị trí nào.
Đầu ra mong đợi:
Mảng ban đầu:
1 2 3 4 5
Sau khi chèn '$', mảng là:
1 2 3 $ 4 5

<?php
$original = array('1', '2', '3', '4', '5');
echo 'Mảng cũ : ' . "\n";
foreach ($original as $x) {
    echo "$x ";
}
$inserted = '$';
array_splice($original, 3, 0, $inserted);
echo " \n Sau khi chèn '$' mảng mới là : " . "\n";
foreach ($original as $x) {
    echo "$x ";
}
echo "\n"
?>
array_splice(array, start, length, array)

Hàm array_splice () xóa các phần tử đã chọn khỏi một mảng và
thay thế nó bằng các phần tử mới. Hàm cũng trả về một mảng với các phần tử đã bị loại bỏ.

Ở đây bắt đầu thay thế từ vị trí thứ 3