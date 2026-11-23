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
    Product Price:
    <input type="number" name="price">
    <br>
    Product Quantity:
    <input type="number" name="quan" id="">
    <br>
    <button type="submit">Submit</button>
</form>
</body>
</html>

<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $id = $_POST["id"];
    $price = $_POST["price"];
    $quan = $_POST["quan"];

    $sql = $conn->prepare("update Product set price = ?, quantity = ? where id = ?");
    $sql->bind_param("iii",$price,$quan,$id);
    if($sql->execute()){
        echo "<script> alert('Product Updated succesfully ')</script>";
    }
    else{
        echo "<script> alert('Not Updated succesfully ')</script>";
    }
}
?>
