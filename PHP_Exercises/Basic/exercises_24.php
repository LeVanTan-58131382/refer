Viết một tập lệnh PHP để lấy thư mục gốc của tài liệu mà theo đó tập lệnh hiện tại đang thực thi, như được định nghĩa trong tệp cấu hình của máy chủ.

<?php
    // getenv() gets the value of an environment variable
    $rd = getenv('DOCUMENT_ROOT');
    echo $rd."\n"; // C:/xampp/htdocs
?>