Viết một hàm PHP để thay đổi tất cả các giá trị của mảng sau thành chữ hoa hoặc chữ thường.
Mảng mẫu:
$ Color = array ('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
Đầu ra mong đợi:
Giá trị ở dạng chữ thường.
Mảng ([A] => blue [B] => green [c] => red)
Giá trị ở dạng chữ hoa.
Mảng ([A] => BLUE [B] => GREEN [c] => RED)

<?php
function array_change_value_case($input, $ucase)
{
    $case = $ucase;
    $narray = array();
    if (!is_array($input)) {
        return $narray;
    }
    foreach ($input as $key => $value) {
        if (is_array($value)) {
            $narray[$key] = array_change_value_case($value, $case);
            continue;
        }
        $narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
    }
    return $narray;
}
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
echo 'Actual array ';
print_r($Color);
echo 'Values are in lower case.';
$myColor = array_change_value_case($Color, CASE_LOWER);
print_r($myColor);
echo 'Values are in upper case.';
$myColor = array_change_value_case($Color, CASE_UPPER);
print_r($myColor);
?>