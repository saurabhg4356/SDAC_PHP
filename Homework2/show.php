<?php
include "db.php";
$result = $conn->query("select * from emp");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="20px">
        <tr>
            <td>Name</td>
            <td>Job Title</td>
            <td>Salary</td>
        </tr>
        <tr>
        <?php
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["job_title"]."</td>";
                echo "<td>".$row["Salary"]."</td>";
                echo "</tr>";
            }?>
        </tr>
    </table>
    
</body>
</html>