<?php
// set time zone
date_default_timezone_set("Asia/Ho_Chi_Minh");

echo "Today is " . date("d") . "<br>";  // Today is 11
echo "Today is " . date("jS") . "<br>"; // Today is 11th

echo "Month is " . date("F") . "<br>"; // Month is October
echo "Month is " . date("m") . "<br>"; // Month is 10
echo "Month is " . date("n") . "<br>"; // Month is 10
echo "Month is " . date("M") . "<br>"; // Month is Oct

echo "Full date is " . date("d/m/Y") . "<br>"; // Full date is 11/10/2020
echo "Full date is " . date("Y-M-d") . "<br>"; // Full date is 2020-Oct-11

echo "Week Day is " . date("l") . "<br>"; // Week Day is Sunday
echo "Week Day is " . date("N") . "<br>"; // Week Day is 7
echo "Day is " . date("z") . "<br>"; // 284
echo "Week of the year " . date("Ws") . "<br>"; // Week of the year 41
echo "Day of the Month " . date("t") . "<br>"; // Day of the Month 31

echo "Hour is" . date("h") . "<br>";
echo "Minutes is" . date("i") . "<br>";
echo "Seconds is" . date("s") . "<br>";
echo "Meridiem is" . date("A") . "<br>"; // PM/AM
echo "Time is" . date("h:i:s A") . "<br>"; // Time is03:43:53PM
echo "Time & Date is " . date("Y-m-d H:i:s A");




$date_1 = date_create(("2013-03-15"));
$date_2 = date_create(("2013-12-12"));

$khoangcach = date_diff($date_1, $date_2);
echo "<br>";
echo $khoangcach->format("%r%a %m %days");
echo "<br>";
print_r($khoangcach);
echo "<br>";


// Cộng ngày
$date_origi = date_create("2015-05-15");
// cộng thêm 10 ngày vào $date_origi
date_add($date_origi, date_interval_create_from_date_string("10 days"));

echo date_format($date_origi, "d-m-Y"); // 25-05-2015

// ngoài ra ta có thể cộng trừ dùng modify
date_modify($date_origi, "-10 days");
echo date_format($date_origi, "d-m-Y"); // 15-05-2015
