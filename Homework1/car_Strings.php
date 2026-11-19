<?php
$single = 'single Quota';
$double = "Double quata";
echo $single;
echo "<br>";
echo $double;
echo "<br>";
$carModel = "Toyata ";
echo "<br>";
$price = "23M";
$Car = $carModel.$price;
echo $Car;
echo "<br>";
$cardes = "Here is my Car";
$serach = strpos($cardes,"my");
echo $serach;
echo "<br>";
$bike = str_replace("Car","Bike",$cardes);
echo $bike;
echo "<br>";
$lencar = strlen($cardes);
echo $lencar;
echo "<br>";
$lower = strtolower($bike);
echo $lower;
echo "<br>";
$upper = strtoupper($bike);
echo $upper;
echo "<br>";
$bikes = " GT ";
$trim = trim($bikes);
echo $trim;
echo "<br>";
echo substr($bike,5,9);

?>
