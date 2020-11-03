Tạo một biểu mẫu HTML đơn giản và chấp nhận tên người dùng và hiển thị tên thông qua câu lệnh echo PHP.

<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='POST'>
   <h2>Nhập vào tên của bạn:</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 </form>
    <?php
        //Lấy tên từ chuỗi truy vấn và lưu trữ vào một biến cục bộ
        $name = $_POST['name'];
        echo "<h3> Hello $name </h3>";
    ?>
</body>
</html>