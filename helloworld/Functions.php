<?php
//FUNCTION PARAMETERS
function getsum($num1,$num2){
    $sum = $num1 + $num2;
    echo $sum;
}
getsum(12,14);




//FUNCTION WITH DEFAULT VALUES
function customFont($font, $size=1,$color="blue"){
    echo "<p style=\"font-family: $font; font-size: {$size}em; color: {$color};\">GGWP</p>";
}
 
customFont("Arial", 2,"red");
customFont("Times", 3,"orange");
customFont("Courier");
echo "<br>";

function getsum1($num1,$num2){
    $sum = $num1 + $num2;
    return $sum;
}
echo getsum1(535,31);
echo "<br>";



//FUNCTION WITH RETURN ARRAY
function divideNumbers($dividend, $divisor){
    $quotient = $dividend / $divisor;
    $array = array($dividend, $divisor, $quotient);
    return $array;
}
 
list($dividend, $divisor, $quotient) = divideNumbers(10, 2);
echo $dividend ."<br>";  // Outputs: 10
echo $divisor."<br>";   // Outputs: 2
echo $quotient."<br>";  // Outputs: 5



//FUNCTION WITH SELF CALL
function self_num(&$num){
$num *= $num;
return $num;
}
$num1=6;
echo $num1."<br>";

self_num($num1);
echo $num1."<br>";





// VARIABLE SCOPES
$greet = "Hello World!";

function test(){
    echo $greet;
}
test();  // Generate undefined variable error
echo $greet; // Outputs: Hello World!
"<br>";
"<br>";
