<?php
// Class definition
class greeting{
    // properties
    public $str = "Hello World!";
    
    // methods
    function show_greeting(){
        return $this->str;
    }
}
 
// Create object from class
$message = new greeting;
var_dump($message);

class gg{
    public $string = "ggwp";

    function show_s(){
        return $this-> string;
    }
}

    $var = new gg;
    var_dump($var)
?>