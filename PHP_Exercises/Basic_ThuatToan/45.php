Viết chương trình PHP để kiểm tra xem một chuỗi đã cho bắt đầu bằng "F" hay kết thúc bằng "B".
Nếu chuỗi bắt đầu bằng "F" thì trả về "Fizz" và trả về "Buzz" nếu kết thúc bằng "B" Nếu chuỗi
bắt đầu bằng "F" và kết thúc bằng "B" thì trả về "FizzBuzz". Trong các trường hợp khác, trả về
chuỗi ban đầu.
Đầu vào mẫu:
"FizzBuzz"
"Fizz"
"Buzz"
"Người sáng lập"
Đầu ra mẫu:
Fizz
Fizz
Buzz
Fizz

<?php
function test($s)
{
    if ((substr($s, 0, 1) == "F") && (substr($s, strlen($s) - 1, 1) == "B")) {
        return "FizzBuzz";
    } else if (substr($s, 0, 1) == "F") {
        return "Fizz";
    } else if (substr($s, strlen($s) - 1, 1) == "B") {
        return "Buzz";
    } else {
        return $s;
    }
}

echo test("FizzBuzz") . "\n";
echo test("Fizz") . "\n";
echo test("Buzz") . "\n";
echo test("Founder") . "\n";
