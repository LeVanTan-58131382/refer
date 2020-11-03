<?php
// Define a class
class MyClass
{
    function __construct()
    {
        echo 'w3resource' . '<br>';
        $this->name = "MyClass";
    }
    function __destruct()
    {
        echo "Destroying " . $this->name . "<br>";
    }
}
$obj = new MyClass();
