<?php
// Hàm header(), đây là một hàm được dùng khá nhiều trong lập trình web, ví dụ như dùng để chuyển hướng trang, dùng để khai báo định dạng file trả về từ Server, ...

header("Content-Type: application/json");
// Create a PHP data array.
$data = ["response" => "Hello World"];
// json_encode will convert it to a valid JSON string.
echo json_encode($data);


// Header điều hướng trang
// header('Location: http://www.domain.net/');


// // Khắc phục lỗi font với hàm header
// header('Content-Type: text/html; charset=utf-8');


// // Khai báo định dạng file
// header("Content-type: text/javascript");
