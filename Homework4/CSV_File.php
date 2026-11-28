<?php
include "db.php";
header("Content-type:text/csv");
header("Content-disposition:attachment;filename=data.csv");
$output = fopen("php://output","w");
fputcsv($output,array("Employee ID","Employee Name","Department","Designation","Salary","joining Date","Email"));
$result = $conn->query("select * from employee_detail");
while($row=$result->fetch_assoc()){
    fputcsv($output,$row);
}
?>

