<?php

class person
{
    public $name = "No name";
    public $age = 0;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function show()
    {
        echo $this->name . "_" . $this->age;
    }
}

$p1 = new Person("Tân", 22);

$p1->show();
