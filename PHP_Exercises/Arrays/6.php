Viết một tập lệnh PHP để giải mã chuỗi JSON sau.
Mã JSON mẫu:
{"Title": "The Cuckoos Calling",
"Tác giả": "Robert Galbraith",
"Chi tiết": {
"Nhà xuất bản": "Little Brown"
}}
Đầu ra mong đợi:
Title: The Cuckoos Calling
Tác giả: Robert Galbraith
Nhà xuất bản: Little Brown

<?php
function w3rfunction($value, $key)
{
    echo "$key : $value" . "\n";
}
$a = '{"Title": "The Cuckoos Calling",
    "Author": "Robert Galbraith",
    "Detail":
    { 
    "Publisher": "Little Brown"
    }
    }';
$j1 = json_decode($a, true);
array_walk_recursive($j1, "w3rfunction");
?>