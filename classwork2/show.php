<?php
include "db.php";
$result = $conn->query("select * from Product");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10px" style="background: linear-gradient(lightblue,red);">
        <tr>
            <td>Product ID</td>
            <td>Product Name</td>
            <td>Product Price</td>
            <td>Product Category</td>
            <td>Product Quantity</td>
        </tr>
        <?php
        while ($row= $result->fetch_assoc()) {?>
            <tr>
                <td><?php echo $row["id"]?></td>
                <td><?php echo $row["name"]?></td>
                <td><?php echo $row["price"]?></td>
                <td><?php echo $row["category"]?></td>
                <td><?php echo $row["quantity"]?></td>
            </tr>
        <?php } ?>
        
    </table>
</body>
</html>