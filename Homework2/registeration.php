<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registeration Form</h1>
    <form action="" method="post">
        Full Name :
        <input type="text" name="name">
        <br>
        Email : 
        <input type="text" name="email">
        <br>
        Password :
        <input type="password" name="pass" id="">
        <br>
        Confirm Password :
        <input type="password" name="cpass" id="">
        <br>
        Job title :
        <input type="text" name="job">
        <br>
        <button type="submit">Register</button>
    </form>
</body>
</html>

<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];
    $job = $_POST["job"];

    if(empty($name) && filter_var($email,FILTER_VALIDATE_EMAIL) && $pass!=$cpass && empty($pass) && empty($cpass) && empty($email) && empty($job)){
        echo "<script> alert('Fill the data correctly ')</script>";
    }
    else{
        
        $sql = $conn->prepare("insert into Employees values(?,?,?,?,?)");
        $sql->bind_param("sssss",$name,$email,$pass,$cpass,$job);
        if($sql->execute()){
            echo "<script> alert('Register succesfully ')</script>";
        }
        else{
            echo "<script> alert('Not Register succesfully ')</script>";
        }
    }
    
    // if (filter_has_var(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)) {
    // if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
    //      echo "<script> alert('Email should proper ')</script>";
    // }
    // if($pass!=$cpass){
    //     echo "<script> alert('Password and Confirm Password should be same ')</script>";
    // }
    

}
?>