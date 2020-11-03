<?php
include("ITinh.php");

class Tru implements ITinh
{

    public function tinh($a, $b)
    {
        return $a - $b;
    }
}
