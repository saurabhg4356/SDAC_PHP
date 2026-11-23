<?php
include "db.php";
$result = $conn->query("select * from employee");
?>

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
    Position :
    <input type="text" name="pos">
    <br>
    Salary :
    <input type="number" name="sal"
    >
    <br>
    <button type="submit">Submit</button>
    </form>
    <br>
    <br>
    <br>
    <h2>Retrive all Data</h2> <br>
    <table border="1" cellpadding="20px">
        <tr><td>Employee ID</td>
        <td>Name</td>
        <td>Position</td>
        <td>Salary</td>
    </tr>
    <?php
    while ($row= $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["position"]."</td>";
        echo "<td>".$row["salary"]."</td>";
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>



<?php
include "db.php";

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name = $_POST["name"];
    $pos = $_POST["pos"];
    $sal = $_POST["sal"];

    $sql =$conn -> prepare( "insert into employee(name,position,salary) values(?,?,?)");
    $sql->bind_param("ssi",$name,$pos,$sal);

    if ($sql->execute()) {
        echo "data inserted";
    }
    else {
        echo " not inserted";
    }
}