<?php

spl_autoload_register(function ($class) {
    include $class . '.php';
});
$print1 = new oop_8_class_1('red', 'Object Oriented Programming');
$print2 = new oop_8_class_2('20px', 'Object Oriented Programming');
