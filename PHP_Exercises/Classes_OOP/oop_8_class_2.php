<?php

// Define a class
class oop_8_class_2
{
    // Declaring two private varaibles
    private $font_size;
    private $string_value;
    // Declarte construct method which accepts two parameters and the method customize_print2()
    function __construct($font_size, $string_value)
    {
        $this->font_size = $font_size;
        $this->string_value = $string_value;
        $this->customize_print2();
    }
    // Declare a method for customize print 
    function customize_print2()
    {
        echo "<p style=font-size:" . $this->font_size . ";>" . $this->string_value . "</p>";
    }
}
