<?php
// Define a class
class Myclass
{
    // Declaring three private varaibles
    private $font_size;
    private $font_color;
    private $string_value;
    // Declarte construct method which accepts three parameters and the method customize_print()
    function __construct($font_size, $font_color, $string_value)
    {
        $this->font_size = $font_size;
        $this->font_color = $font_color;
        $this->string_value = $string_value;
        $this->customize_print();
    }
    // Declare a method for customize print 
    function customize_print()
    {
        echo "<p style=font-size:" . $this->font_size . ";color:" . $this->font_color . ";>" . $this->string_value . "</p>";
    }
}
// Create first object and passes three parameters 
$a = new MyClass('30px', 'red', 'Object Oriented Programming');
// Create second object and passes three parameters 
$b = new MyClass('25px', 'blue', 'Object Oriented Programming');
// Create third object and passes three parameters 
$c = new MyClass('20px', 'green', 'Object Oriented Programming');
// Create fourth object and passes three parameters 
$d = new MyClass('15px', 'black', 'Object Oriented Programming');
