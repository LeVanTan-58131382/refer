<?php
//Trong ví dụ sau, chúng ta sẽ tạo một lớp Người dùng trừu tượng và hai lớp con (lớp Quản trị và Người xem) kế thừa từ lớp trừu tượng.
//Tạo một lớp trừu tượng với tên là Người dùng, có một phương thức trừu tượng với tên là stateYourRole ().

abstract class User
{

    //Thêm vào lớp một biến được bảo vệ với tên là $ username và các phương thức setter và getter công khai để đặt và lấy $ username.

    protected $username;

    abstract public function stateYourRole();

    public function setUsername($name)
    {
        $this->username = $name;
    }

    public function getUsername()
    {
        return $this->username;
    }
}

// Tạo một lớp Quản trị viên kế thừa lớp Người dùng trừu tượng.
class Admin extends User
{
    //Phương thức nào nên được định nghĩa trong lớp?

    public function stateYourRole()
    {
        return "admin";
    }
}

//Tạo một lớp khác, Viewer kế thừa lớp trừu tượng Người dùng. Xác định phương thức cần được định nghĩa trong mỗi lớp con của lớp Người dùng.
class Viewer extends User
{
    public function stateYourRole()
    {
        return strtolower(__CLASS__);
    }
}

//Tạo một đối tượng từ lớp Admin, đặt tên người dùng thành "Balthazar" và đặt tên người dùng này trả về chuỗi "admin".
$admin1 = new Admin();
$admin1->setUsername("Balthazar");
echo $admin1->stateYourRole();
