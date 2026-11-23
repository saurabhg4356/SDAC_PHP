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
    Product Id:
    <input type="number" name="id">
    <br>
    Product name :
    <input type="text" name="name">
    <br>
    Product Price :
    <input type="number" name="price">
    <br>
    Product Category:
    <input type="text" name="category">
    <br>
    Product Quantity :
    <input type="number" name="quan">
    <br>
    <button type="submit">Submit</button>
</form>
</body>
</html>


<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $category = $_POST["category"];
    $quan = $_POST["quan"];

    $sql = $conn->prepare("insert into Product values(?,?,?,?,?)");
    $sql->bind_param("isisi",$id,$name,$price,$category,$quan);
    if($sql->execute()){
        echo "<script> alert('Product Inserted succesfully ')</script>";
    }
    else{
        echo "<script> alert('Not Inserted succesfully ')</script>";
    }
}
?>
