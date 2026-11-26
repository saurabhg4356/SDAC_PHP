<?php
include "db.php";
header("Content-type:text/csv");
header("Content-disposition:attachment;filename=person.csv");
$output = fopen("php://output","w");
fputcsv($output,array("SR No.","Name","Age","Email","Address"));
$result = $conn->query("select * from Person");
while ($row=$result->fetch_assoc()) {

fputcsv($output,$row);
}

?>