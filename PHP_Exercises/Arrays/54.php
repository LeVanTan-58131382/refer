Viết chương trình PHP để tạo một phạm vi giống như mảng sau.
Mảng
(
[20] => 2
[21] => 3
[22] => 4
[23] => 5
[24] => 6
[25] => 7
)

<?php
print_r(array_combine(range(20, 25), range(2, 7)));
?>