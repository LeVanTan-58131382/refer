Viết một tập lệnh PHP, tập lệnh này thay đổi màu của ký tự đầu tiên của một từ.

<?php
    $text = 'PHP Tutorial';
    $text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
    echo "<br>" . $text;
?>