Viết một tập lệnh PHP để lấy độ dài chuỗi ngắn nhất / dài nhất từ ​​một mảng. Đi tới trình chỉnh sửa
Mảng mẫu: ("abcd", "abc", "de", "hjjj", "g", "wer")
Đầu ra mong đợi: Độ dài mảng ngắn nhất là 1. Độ dài mảng dài nhất là 4.

<?php
$my_array = array("abcd", "abc", "de", "hjjj", "g", "wer");
$new_array = array_map('strlen', $my_array);
// Show maximum and minimum string length using max() function and min() function 
echo "The shortest array length is " . min($new_array) .
    ". The longest array length is " . max($new_array) . '.';
?>

Hàm min () trả về giá trị thấp nhất trong một mảng hoặc giá trị thấp nhất của một số giá trị được chỉ định.

Ví dụ
<?php
echo (min(2, 4, 6, 8, 10) . "<br>"); // 2
echo (min(22, 14, 68, 18, 15) . "<br>"); // 14
echo (min(array(4, 6, 8, 10)) . "<br>"); // 4
echo (min(array(44, 16, 81, 12))); // 12
?>

Hàm array_map(): Gửi từng giá trị của một mảng tới một hàm, nhân từng giá trị với chính nó và trả về một mảng với các giá trị mới
Ở đây ta gửi từng giá trị của mảng array đến hàm strlen() ,để tính xem phần tử nào của mảng array có độ dài nhỏ và lớn nhất ( các giá
trị này nằm trong mảng mới)