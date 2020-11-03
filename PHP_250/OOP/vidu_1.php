<?php

class calculator
{
    public $a, $b, $c;

    function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
};

$c1 = new calculator();

$c1->a = 20;
$c1->b = 30;

$c2 = new calculator();

$c2->a = 40;
$c2->b = 50;

echo "sum of c1: " . $c1->sum() . "\n";
echo "sub of c2: " . $c2->sub() . "\n";
