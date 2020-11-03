<?php
class myClass
{
    public function __construct()
    {
        $functionName = 'doSomething'; // tên hàm là doSomething
        $this->$functionName('Hello World');
    }
    private function doSomething($string)
    {
        echo $string; // Outputs "Hello World"
    }
}

$my = new myClass(); // in ra dòng chữ Hello World
