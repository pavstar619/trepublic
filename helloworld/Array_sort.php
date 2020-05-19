<?php
$values = array("frank","eqe","qew","dasdsa");
sort($values);
echo $values[2];
echo "<br>";
print_r($values);
echo "<br>";

$age = array("A"=> 5,"D"=> 123,"Qwe"=> 32);
asort($age); //sort by value
print_r($age);
echo "<br>";
ksort($age); //sort by key
print_r($age);

?>