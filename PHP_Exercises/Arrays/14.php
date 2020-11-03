Viết một tập lệnh PHP để tạo các số ngẫu nhiên duy nhất trong một phạm vi.
Phạm vi mẫu: (11, 20)
Đầu ra mẫu: 17 16 13 20 14 19 18 15 11 12

<?php
$n = range(11, 20);
shuffle($n);
for ($x = 0; $x < 10; $x++) {
    echo $n[$x] . ' ';
}
echo "\n"
?>

Hàm shuffle() : Xếp thứ tự ngẫu nhiên của các phần tử trong mảng