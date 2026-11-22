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
echo " refer to the Question 1 and 2 <br>";

echo " Question 4";
array_push($Name,"Adil");
foreach($Name as $n){
    echo "$n <br>";
}
echo "<br>";

array_pop($Name);
foreach($Name as $n){
    echo "$n <br>";
}
echo "<br>";

$array1 = "Hello";


$array2 = "World";
$Per = array("Saurabh","Aryan","ganesh","Shoeb","sahil");

$arraymerge = array_merge($Name,$Per);
foreach($arraymerge as $n){
    echo "$n <br>";
}

echo "<br>";
$slice = array_slice($Name,0,4);
foreach($slice as $n){
    echo "$n <br>";
}


$keys = array_keys($fruits);
foreach($keys as $k){
    echo "$k <br> ";
}

?>
