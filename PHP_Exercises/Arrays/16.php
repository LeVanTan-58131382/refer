Viết một hàm PHP trả về số nguyên thấp nhất không phải là 0

<?php
function min_values_not_zero(array $values)
{
    return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_values_not_zero(array(-1, 0, 1, 12, -100, 1)) . "\n"); // -100
?>