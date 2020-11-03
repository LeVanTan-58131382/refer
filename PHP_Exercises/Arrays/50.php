Viết một hàm PHP để chuyển đổi một chuỗi thành một mảng (cắt mọi dòng và xóa các dòng trống)

<?php
$string = "  IANA is the global coordinator of the DNS root. 
The root is the upper-most part of the DNS hierarchy, 
and involves delegating administrative responsibility 
of “top-level domains”, which are the last segment of 

a domain name, such as .com, .uk and .nz. Part of this 
task includes evaluating requests to change the operators 

of country code domains, as well as day-to-day maintenance
of the details of the existing operators. ";
$result = array_filter(array_map('trim', explode("\n", $string)), 'strlen');
print_r($result);
?>