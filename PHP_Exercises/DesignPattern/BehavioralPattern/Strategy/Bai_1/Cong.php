<?php
include("ITinh.php");

class Cong implements ITinh
{

    public function tinh($a, $b)
    {
        return $a + $b;
    }
}
