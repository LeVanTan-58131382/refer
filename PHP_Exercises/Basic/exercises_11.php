Viết một chương trình PHP đơn giản để kiểm tra xem email có hợp lệ không. Đi tới trình chỉnh sửa
Gợi ý: Sử dụng bộ lọc FILTER_VALIDATE_EMAIL xác thực giá trị dưới dạng địa chỉ e-mail.

<?php
    // pass valid/invalid emails
    $email = "mail@example.com";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        echo "<br>" . '"' . $email . '" = Valid (hợp lệ)'."\n";
    }
    else 
    {
        echo "<br>" . '"' . $email . '" = Invalid (không hợp lệ)'."\n";
    }
?>