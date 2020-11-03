<?php

$str = "Hello World";

$encodeString = convert_uuencode($str);


// Hàm convert_uuencode () mã hóa một chuỗi bằng thuật toán uuencode.

// Lưu ý: Hàm này mã hóa tất cả các chuỗi (kể cả nhị phân) thành các ký tự có thể in được. Điều này sẽ khắc phục mọi sự cố với dữ liệu nhị phân bị che khuất khi lưu trữ trong cơ sở dữ liệu hoặc truyền dữ liệu qua mạng. Hãy nhớ sử dụng hàm convert_uudecode () trước khi sử dụng lại dữ liệu.

// Lưu ý: Dữ liệu chưa được mã hóa lớn hơn khoảng 35% so với dữ liệu gốc.


echo $encodeString; // +2&5L;&\@5V]R;&0` `

$decodeString = convert_uudecode($encodeString);
echo $decodeString; // Hello World
