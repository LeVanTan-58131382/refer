<?php

class base
{

    public static $name = "Lê Văn Tân";

    public static function show()
    {
        echo self::$name;
        // echo $this->name sẽ bị lỗi
    }

    public function __construct($n)
    {
        self::$name = $n;
        self::show();
    }
}

//echo base::$name; // Lê Văn Tân
//base::show(); // Lê Văn Tân

//$test = new base("Lê Văn Tiến");
//echo $test->name;  // 2 dòng này sẽ lỗi

$test = new base("Lê Văn Tiến"); // in ra Lê Văn Tiến


class subClass extends base
{
    public static function show()
    {
        echo parent::$name;
    }
}

$test_2 = new subClass("Lê Thanh Hoài");
$test->show();
