<?php

class employee
{
    protected $name;
    protected $age;
    protected $salary;

    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function info()
    {
        echo "Profile" . "\n";
        echo "Name: " . $this->name . "\n";
        echo "Age" . $this->age . "\n";
        echo "Salary: " . $this->salary . "\n";
    }
}

class manager extends employee
{
    // ngoài extend 3 tham số thì ta có thể thêm tham số riêng
    protected $company;


    function __construct($n, $a, $s, $c)
    {
        parent::__construct($n, $a, $s);
        $this->company = $c;
    }

    function info()
    {
        echo "Profile" . "\n";
        echo "Name: " . $this->name . "\n";
        echo "Age" . $this->age . "\n";
        echo "Salary: " . $this->salary . "\n";
        echo "Company: " . $this->company . "\n";
    }
}

$e_1 = new manager("Tân", 21, 2000, "Samsung");

$e_1->info();
// Profile Name: Tân Age21 Salary: 2000 Company: Samsung
