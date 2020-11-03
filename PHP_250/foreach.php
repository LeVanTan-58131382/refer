<?php
//------------------
$array = [
    [1, 2],
    [30, 40]
];

foreach ($array as list($a, $b)) {
    echo "a: " . $a . " b: " . $b . "<br>";
}

// kết quả: 
// a: 1 b: 2
// a: 30 b: 40

//------------------
$emp = [
    [1, "Cuong", "Manager", 50000],
    [2, "Tan", "Salesman", 40000],
    [3, "Tien", "Computer Operator", 12000],
    [4, "Hoai", "Driver", 5000],
];

foreach ($emp as list($id, $name, $designation, $salary)) {
    echo "$id $name $designation $salary" . "<br>";
}

// kết quả
// 1 Cuong Manager 50000
// 2 Tan Salesman 40000
// 3 Tien Computer Operator 12000
// 4 Hoai Driver 5000


// ta có thể thêm key vào như sau
$emp_2 = [
    [
        "maso" => 1,
        "ten" => "Cuong",
        "nghenghiep" => "Manager",
        "luong" => 50000
    ],
    [
        "maso" => 2,
        "ten" => "Tan",
        "nghenghiep" => "Salesman",
        "luong" => 40000
    ],
    [
        "maso" => 3,
        "ten" => "Tien",
        "nghenghiep" => "Computer Operator",
        "luong" => 12000
    ],
    [
        "maso" => 4,
        "ten" => "Hoai",
        "nghenghiep" => "Driver",
        "luong" => 5000
    ],
];

foreach ($emp_2 as list("maso" => $id, "ten" => $name, "nghenghiep" => $designation, "luong" => $salary)) {
    echo "$id $name $designation $salary" . "<br>";
}
