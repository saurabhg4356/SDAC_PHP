<?php
$Carm = array("Toyata","Ford","Mercedes","BMW","Mahindra");
for ($i=0; $i < count($Carm); $i++) { 
    echo "Car Model is :$Carm[$i] <br>";
}

$car = array(
    "Toyata" => "1.2M",
    "Ford" => "3.4M",
    "Mercedes" => "100M",
    "BMW" => "50M",
    "Mahindra" => "5M"

);
foreach ($car as $model => $price) {
    echo " Car Model is $model and his price is $price <br>";

}
array_push($Carm,"Suzuki");
array_pop($Carm);

$array1 = array("Bentaly","Porsche");
$Cars = array_merge($Carm,$array1);
for ($i=0; $i < count($Cars); $i++) { 
    echo "$Cars[$i] <br>";
}
echo "<br>";
$slice = array_slice($Cars,1,2);
for ($i=0; $i < count($slice); $i++) { 
    echo "$slice[$i] <br>";
}
echo "<br>";
$key = array_keys($Cars);
for ($i=0; $i < count($key); $i++) { 
    echo "Car Model is :$key[$i] <br>";
}
?>