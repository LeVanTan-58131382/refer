<?php
include("ITinh.php");

class Nhan implements ITinh
{

    public function tinh($a, $b)
    {
        return $a * $b;
    }
}
