<?php

// Premiere ligne

$fruits = array("Apple", "Banana", "Orange");
echo count($fruits);
echo $fruits[1];

//Deuxieme ligne


$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

echo "<br><br>Ben is " . $age["Ben"]. " years old.<br><br>";

foreach ($age  as $key =>  $value) {
    echo "<br>Key=" . $key  . ", Value=" . $value ;
}


echo "<br><br>";
//Troisieme ligne

$colors = array("red", "green", "blue", "yellow");
sort($colors);
print_r($colors);
rsort($colors);
print_r($colors);

echo "<br><br>";
// Quatrieme ligne

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
print_r($age);





