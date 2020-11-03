Viết một đoạn mã PHP để chèn một chuỗi vào vị trí được chỉ định trong một chuỗi đã cho.
Chuỗi gốc: 'The brown fox'
Chèn "quick" giữa "The" và "brown".
Đầu ra mong đợi: 'The quick brown fox'

<?php
$original_string = 'The brown fox';
$string_to_insert = 'quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert . ' ', $insert_pos, 0);
echo $new_string . "\n";
?>

Hàm substr_replace () thay thế một phần của chuỗi bằng một chuỗi khác.
substr_replace(string,replacement,start,length)

Hàm substr_replace() ở đây có ý nghĩa là chèn từ "quick " vào vị trí thứ 4 đến vị trí 0 (Nghĩa là chèn), còn ko có
số 0 ngoài sau thì có nghĩa là thay thế từ vị trí 4 trở đi là từ "quick" hết (the quick)