<?php

abstract class parentClass
{
    public $name;

    abstract public function cal($a, $b); // khai báo -> thực thi ở lớp con
}

class childClass extends parentClass
{
    public function cal($c, $d)
    {
        echo $c + $d;
    }
}

$test = new childClass();

$test->cal(10, 20); // 30
