<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Username :
        <input type="text" name="user">
        <br>
        Password :
        <input type="text" name="pass">
        <br>
        I am aggred to the Terms and Conditions <input type="checkbox" name="agree" id="">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]==="GET"){
    $user = $_GET["user"];
    $pass = $_GET["pass"];
    $agree = isset($_GET["agree"])?"Agreed":"Not Agree";
    echo "Welcome, $user. You have $agree to the terms and 
conditions. ";
}
?>