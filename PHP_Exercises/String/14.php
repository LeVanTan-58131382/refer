Viết một đoạn mã PHP để in ký tự tiếp theo của một ký tự cụ thể.
Ký tự mẫu: 'a'
Đầu ra mong đợi: 'b'
Ký tự mẫu: 'z'
Đầu ra mong đợi: 'a'

<?php
$cha = 'a';
$next_cha = ++$cha;
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) {
    $next_cha = $next_cha[0];
}
echo $next_cha . "\n";
?>