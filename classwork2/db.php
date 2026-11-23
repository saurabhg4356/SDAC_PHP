<?php
$s = "localhost";
$u = "root";
$p = "saurabh4245";
$db = "php";

$conn = new mysqli($s,$u,$p,$db);

if(!$conn){
    echo "Not connected";
}
?>