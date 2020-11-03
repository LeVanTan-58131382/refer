Google Translate
Viết một tập lệnh PHP hiển thị tất cả các số từ 200 đến 250 chia hết cho 4. Đi tới trình chỉnh sửa
Lưu ý: Không sử dụng bất kỳ câu lệnh điều khiển PHP nào.
Sản lượng mong đợi: 200.204.208.212.216.220.224.228.232.236.240.244.248

<?php
echo implode(",", range(200, 250, 4)) . "\n";
?>

Hàm implode Nối các phần tử mảng bằng một chuỗi

Hàm range () tạo một mảng chứa một dải các phần tử.
Hàm này trả về một mảng các phần tử từ thấp đến cao.

Ví dụ:
Trả về một mảng các phần tử từ "0" đến "50" và tăng thêm 10.

<?php
$number = range(0, 50, 10);
print_r($number);
?>

Ở đây ta dùng range(200, 250, 4) nghĩa là các phần tử từ 200 đến 250, tăng lên 4 sau mỗi phần tử đồng nghĩa với việc chia hết cho 4