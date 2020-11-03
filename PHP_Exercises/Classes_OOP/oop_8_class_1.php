<?php
// Define a class
class oop_8_class_1
{
    // Declaring two private varaibles
    private $font_color;
    private $string_value;
    // Declarte construct method which accepts two parameters and the method customize_print1()
    function __construct($font_color, $string_value)
    {
        $this->font_color = $font_color;
        $this->string_value = $string_value;
        $this->customize_print1();
    }
    // Declare a method for customize print 
    function customize_print1()
    {
        echo "<p style=color:" . $this->font_color . ";>" . $this->string_value . "</p>";
    }
}
