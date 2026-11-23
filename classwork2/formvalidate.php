<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="
    " method="post">
    Name :
    <input type="text" name="name">
    <br>
    Email :
    <input type="text" name="email">
    <br>
    Password :
    <input type="text" name="pass">
    <br>
    Confirm Password :
    <input type="text" name="cpass">
    <br>
    <button type="submit">Submit</button>
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];  
    
    if(empty($id)){
        echo "<script> alert('Name should not be empty')</script>";
    }
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<script> alert('Email should be proper')</script>";
    }
    if($pass!=$cpass){
        echo "<script> alert('Password and Confirm password should be same')</script>";
    }

}
?>