<?php
// Define a class
class Myclass
{
    // Declaring three private variables
    private $font_size;
    private $font_color;
    private $string_value;
    // Declarte construct method which accepts three parameters and the method customize_print()
    function __construct($font_size, $font_color, $string_value)
    {
        $this->font_size = $font_size;
        $this->font_color = $font_color;
        $this->string_value = $string_value;
        $this->customize_print(); // Có thể gọi hàm thành viên trong hàm construct
    }
    // Declare a method for customize print 
    function customize_print()
    {
        echo "<p style=font-size:" . $this->font_size . ";color:" . $this->font_color . ";>" . $this->string_value . "</p>";
    }
}
// Create a new object and passes three parameters 
$f = new MyClass('20px', 'red', 'Object Oriented Programming');
