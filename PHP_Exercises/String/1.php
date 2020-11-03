Viết một tập lệnh PHP để:
a) biến đổi một chuỗi tất cả các chữ hoa.
b) biến đổi một chuỗi tất cả các chữ thường.
c) viết hoa ký tự đầu tiên của một chuỗi.
d) tạo ký tự đầu tiên của chuỗi trong số các từ viết hoa.

<?php
echo "<br>";
//all uppercase letters
print (strtoupper("the quick brown fox jumps over the lazy dog.")) . "\n"; // THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG.
//all lowercase letters
print (strtolower("THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG")) . "\n"; // the quick brown fox jumps over the lazy dog
// make a string's first character uppercase
print (ucfirst("the quick brown fox jumps over the lazy dog.")) . "\n"; // The quick brown fox jumps over the lazy dog
// make a string's first character of all the words uppercase
print (ucwords("the quick brown fox jumps over the lazy dog.")) . "\n"; // The Quick Brown Fox Jumps Over The Lazy Dog
?>