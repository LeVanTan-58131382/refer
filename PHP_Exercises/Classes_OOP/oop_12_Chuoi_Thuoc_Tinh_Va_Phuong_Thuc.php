<?php
//Hãy thêm 2 phương thức để biểu diễn các chức năng đăng ký và thư trong lớp Người dùng. Các phương thức này sẽ lặp lại một chuỗi dưới dạng trình giữ chỗ cho mục đích thực tế của chúng.

//Đây là lớp Người dùng mà chúng ta sẽ sử dụng cho bài tập này. Phương thức hello () lặp lại tên đầu tiên của người dùng.

class User
{

    // The class properties.
    public $firstName;

    // A method that says hello to the user $firstName.
    // The user $firstName property can be approached with the $this keyword.
    public function hello()
    {
        echo "hello, " .  $this->firstName;
        return $this;
    }


    //Thêm một phương thức register () vào lớp lặp lại chuỗi ">> register".

    // A method to register the user.
    public function register()
    {
        echo " >> registered";
        return $this;
    }

    //Thêm phương thức mail () vào lớp lặp lại chuỗi ">> email đã gửi".

    // A method to send the welcome email.
    public function mail()
    {
        echo " >> email sent";
    }

    //Thêm return $ this vào phương thức hello () để nó có thể được xâu chuỗi với bất kỳ phương thức nào khác trong lớp.
    //Thêm return $ this vào phương thức register() để có thể được xâu chuỗi với bất kỳ phương thức nào khác trong lớp.
}

//Tạo một đối tượng $ user1 mới với tên đầu tiên là "Jane".
//Đối với đối tượng này, hãy xâu chuỗi các phương thức theo thứ tự sau: hello () -> register () -> mail ()
$user1 = new User();
$user1->firstName = "Jane";

// Chain the methods hello then register then mail.
$user1->hello()->register()->mail();
