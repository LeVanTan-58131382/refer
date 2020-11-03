<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "logindongian") or die("Connec error");
mysqli_set_charset($conn, "utf8");


$query = "SELECT * FROM users";
$users = mysqli_query($conn, $query);

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$error = "";

foreach ($users as $user) {
    if ($user["name"] == $username && $user["password"] == $password) {
        $_SESSION['user'] = $username;
        header("location:mainpage.php");
    } else {
        $error = "Tên đăng nhập hoặc mật khẩu không chính xác!";
        require_once "loginform.php";
    }
}




// if ($username == 'admin' && $password == '123') {
//     $_SESSION['user'] = $username;
//     header("location:mainpage.php");
// } else {
//     echo "incorrect username and password";
//     require "login.html";
// }
