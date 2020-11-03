<?php
class MyClass
{
    private $a = 1;
    public function add(int $a)
    {
        $this->a += $a;
        return $this;
    }
    public function get()
    {
        return $this->a;
    }
}
$object = new MyClass();
var_dump($object->add(4)->get()); // int(5)

$o1 = new MyClass();
$o2 = clone $o1->add(2);
var_dump($o1->get()); // int(3)
var_dump($o2->get()); // int(3)

$o3 = new MyClass();
$o3->add(2); // 3
$o4 = clone $o3->add(2);
var_dump($o3->get()); // int(5)
var_dump($o4->get()); // int(5)