<?php

echo " Queston 1";
$Name = array("Saurabh","Aryan","ganesh","Shoeb","sahil");
for ($i=0; $i < count($Name); $i++) { 
    echo "$Name[$i]";
}

echo " Question 2";
$fruits = array(
    "apple" => "RED",
    "Banana" => "Yellow",
    "grapes" => "green",
    "pineapple" => "yellow",
    "orange" => "green"
);

foreach ($fruits as $fruit => $color) {
    echo $fruit . " = " . $color . "<br>";
}

echo " Questionm 3";
echo " refer to the Question 1 and 2";

echo " Question 4";
$Person = array_push($Name,"Adil");
array_pop($Name);
$array1 = "Hello";


$array2 = "World";
$Per = array("Saurabh","Aryan","ganesh","Shoeb","sahil");

$arraymerge = array_merge($Name,$Per) ;
array_slice($Name,0,5);
// $print = foreach ($fruits as $fruit){



?>
