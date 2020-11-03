<?php

class base
{
    public $name = "Lớp cha";

    public function cal($a, $b)
    {
        return $a * $b;
    }
}

class sub extends base
{
    public $name = "Lớp con";

    public function cal($a, $b)
    {
        return $a + $b;
    }
}

$test = new sub();

echo $test->name;

echo $test->cal(5, 10);

//Lớp con 15 
