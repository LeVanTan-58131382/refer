<?php
include("ITinh.php");

class Chia implements ITinh
{

    public function tinh($a, $b)
    {
        return $a / $b;
    }
}
