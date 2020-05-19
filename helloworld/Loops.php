<?php
$i=0;
while($i<5){
    $i++;
    echo "value of i: " . $i. "<br>"; //WHILE LOOP
}
echo "<br>";

$j=0;
do{
    $j++;
    echo "value of j: " . $j. "<br>"; //DO WHILE LOOP
}
while($j<10);
echo "<br>";

$k=0;
for($k=0;$k<=6;$k++){
    echo "value of k: " . $k. "<br>"; //FOR LOOP
}
echo "<br>";

$man =array(
    array(
    "name" => "Pav",
    "id" => "112",
    "age" => "12"
    ),
    array(
        "name" => "gg",
        "id" => "12312",
        "age" => "34"
        )
    );
    $keys = array_keys($man);
    for($i=0;$i< count($man);$i++){               //FOREACH WITH FOR LOOP NESTED
        foreach($man[$keys[$i]] as $key => $val){
            echo $key . ":" . $val . "<br>";
            
    }
    echo "<br>";
    
    }
?>