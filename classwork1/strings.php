<?php
$single = ' Hello ';
$double = 'World';
echo $single;
echo $double;
echo "$single.$double"; 

$detail = "My name is Saurabh";
$name = strpos($detail,"name");
echo $name;
echo "<br>";
$replace = str_replace($detail,"Saurabh","Satyam");
echo $replace;

$len = strlen($single);
echo $len;

$lower = strtolower($single);
$upper = strtoupper($single);
echo $lower;
echo $upper;

$sub = substr($detail,0,9);
echo $sub;

?>