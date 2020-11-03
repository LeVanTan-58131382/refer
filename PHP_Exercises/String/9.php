Viết một tập lệnh PHP để tạo mật khẩu ngẫu nhiên đơn giản [không sử dụng hàm rand ()] từ một chuỗi đã cho.
Chuỗi mẫu: '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'
Lưu ý: Độ dài mật khẩu có thể là 6, 7, 8, v.v.

<?php
function password_generate($chars)
{
    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($data), 0, $chars);
}
echo password_generate(7) . "\n";
?>

Hàm str_shuffle () xáo trộn ngẫu nhiên tất cả các ký tự của một chuỗi;
Hàm substr(str_shuffle($data), 0, $chars); lấy từ các kí tự từ vị trí 0 đến vị trí thứ $char;