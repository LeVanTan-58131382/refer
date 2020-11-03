<?php

//Tạo lớp Người dùng với thuộc tính $ username được bảo vệ và các phương thức có thể đặt và lấy $ username.
class User
{
    protected $username;

    public function setUsername($name)
    {
        $this->username = $name;
    }

    public function getUsername()
    {
        return $this->username;
    }
}


//Tạo giao diện Tác giả bằng các phương thức trừu tượng sau đây có thể cung cấp cho người dùng một loạt các đặc quyền về quyền tác giả. Phương thức đầu tiên là setAuthorPrivileges (), và nó nhận một tham số là $ array và phương thức thứ hai là getAuthorPrivileges ().
interface Author
{
    public function setAuthorPrivileges($array);

    public function getAuthorPrivileges();
}


//Tạo giao diện Trình chỉnh sửa với các phương pháp để đặt và nhận các đặc quyền của trình chỉnh sửa.
interface Editor
{
    public function setEditorPrivileges($array);

    public function getEditorPrivileges();
}


//Tạo một lớp AuthorEditor mở rộng cả lớp Người dùng và triển khai các giao diện Author và Editor.
class AuthorEditor extends User implements Author, Editor
{

    //Tạo trong lớp AuthorEditor các phương thức mà nó sẽ triển khai và các thuộc tính mà các phương thức này buộc chúng ta phải thêm vào lớp.
    //Ví dụ, để triển khai phương thức công khai setAuthorPrivileges (), chúng ta phải thêm vào lớp của mình một thuộc tính chứa mảng các đặc //quyền của quyền tác giả và đặt tên nó là $ authorPrivilegesArray cho phù hợp.


    private $authorPrivilegesArray = array();

    private $editorPrivilegesArray = array();

    public function setAuthorPrivileges($array)
    {
        $this->authorPrivilegesArray = $array;
    }

    public function getAuthorPrivileges()
    {
        return $this->authorPrivilegesArray;
    }

    public function setEditorPrivileges($array)
    {
        $this->editorPrivilegesArray = $array;
    }

    public function getEditorPrivileges()
    {
        return $this->editorPrivilegesArray;
    }
}

//Bây giờ, hãy tạo một đối tượng với tên $ user1 từ lớp AuthorEditor và đặt tên người dùng của nó thành "Balthazar".
$user1 = new AuthorEditor();
$user1->setUsername("Balthazar");

//Đặt trong đối tượng $ user1 một mảng các đặc quyền của quyền tác giả, với các đặc quyền sau: "viết văn bản", "thêm dấu chấm câu".
$user1 = new AuthorEditor();
$user1->setUsername("Balthazar");
$user1->setAuthorPrivileges(array("write text", "add punctuation"));


//Đặt trong đối tượng $ user1 một mảng có các đặc quyền biên tập sau: "chỉnh sửa văn bản", "chỉnh sửa dấu câu".
$user1 = new AuthorEditor();
$user1->setUsername("Balthazar");
$user1->setAuthorPrivileges(array("write text", "add punctuation"));
$user1->setEditorPrivileges(array("edit text", "edit punctuation"));


// Viết mã để lấy tên $ user1 và các đặc quyền:
// Balthazar có các đặc quyền sau: viết văn bản, thêm dấu câu, sửa văn bản, sửa dấu câu.
$userName  = $user1->getUsername();
$userPrivileges = array_merge(
    $user1->getAuthorPrivileges(),
    $user1->getEditorPrivileges()
);

echo $userName . " has the following privileges: ";
echo implode(", ", $userPrivileges);
echo ".";
