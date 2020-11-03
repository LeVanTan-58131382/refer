Viết một lớp PHP đơn giản hiển thị chuỗi sau. Đi tới trình chỉnh sửa

'Lớp MyClass đã được khởi tạo!'

<?php
    class MyClass {
        public function __construct() 
        {
            echo 'MyClass class has initialized !'."\n";
        }
    }
    $userclass = new MyClass;
?>