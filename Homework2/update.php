<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Employee Name :
        <input type="text" name="name">
        <br>
        Salary :
        <input type="number" name="sal" id="">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name = $_POST["name"];
    $sal = $_POST["sal"];

    $sql = $conn ->prepare("update emp set salary = ? where name = ?");

    $sql->bind_param("is",$sal,$name);
    if($sql->execute()){
        echo " data updated";

    }
    else{
        echo "data not updated";
    }
}
?>