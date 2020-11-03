<?php

interface parent_1
{
    function cal($a, $b);
}

interface parent_2
{
    function sub($c, $d);
}

class childClass implements parent_1, parent_2
{
    public function cal($a, $b)
    {
        echo $a + $b;
    }

    public function sub($c, $d)
    {
        echo $c - $d;
    }
}

$test = new childClass();

$test->sub(40, 20); // 20
