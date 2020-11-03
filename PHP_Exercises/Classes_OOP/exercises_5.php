Tính toán sự khác biệt giữa hai ngày bằng cách sử dụng phương pháp PHP OOP.
Ngày lấy mẫu: 1981-11-03, 2013-09-04
Kết quả mong đợi: Chênh lệch: 31 năm, 10 tháng, 1 ngày

<?php
    $sdate = new DateTime("1981-11-03");
    $edate = new DateTime("2013-09-04");
    $interval = $sdate->diff($edate);
    echo "Difference : " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";
?>