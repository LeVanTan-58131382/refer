Viết một tập lệnh PHP để lấy tên của các chức năng của một mô-đun.

<?php
    print_r(get_extension_funcs("JSON"));
    echo "\n";
    print_r(get_extension_funcs("XML"))."\n";
?>