Viết một tập lệnh PHP để biết thời gian của lần sửa đổi cuối cùng của trang hiện tại

<?php
    echo "Last modified: " . date ("F d Y H:i:s.", getlastmod())."\n";
?>