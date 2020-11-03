<?php
// Define a class
class Myclass
{
    // Declare $font_size as Public property
    public $font_size = "18px";
    // Declare $font_color as Private property
    private $font_color = "blue";
    // Declare $string_name as Protected property
    protected $string_name = "w3resource";
    // Declare a method to print properties value. This is public.
    function property_print()
    {
        echo $this->font_size;
        echo $this->font_color;
        echo $this->string_name;
    }
}
$obj = new MyClass;
echo $obj->font_size; //Hiển thị 18px 
echo $obj->font_color; //Fatal error: Cannot access private property Myclass::$font_color in F:\wamp\.. // Lỗi vì là private
echo $obj->string_name; //Fatal error: Cannot access protected property Myclass::$string_name in F:\wamp\.. // Lỗi vì là protected
$obj->property_print(); //Display 18pxbluew3resource
