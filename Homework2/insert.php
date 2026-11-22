<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name :
    <input type="text" name="name">
    <br>
    Job title :
    <input type="text" name="job">
    <br>
    Salary :
    <input type="number" name="sal"
    >
    <br>
    <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
include "db.php";

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name = $_POST["name"];
    $job = $_POST["job"];
    $sal = $_POST["sal"];

    $sql =$conn -> prepare( "insert into emp values(?,?,?)");
    $sql->bind_param("ssi",$name,$job,$sal);

    if ($sql->execute()) {
        echo "data inserted";
    }
    else {
        echo " not inserted";
    }
}