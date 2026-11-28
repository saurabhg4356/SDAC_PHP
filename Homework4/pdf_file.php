<?php
include "db.php";
require "vendor/autoload.php";
require "tcpdf/tcpdf.php";
$result = $conn->query("select * from Employee_detail");
$pdf = new TCPDF();
$pdf->AddPage();
$pdf->setFont("times","I","12");
$html= '<html>
<head></head><body>
<h2>Employee Detail</h2>
<table>

    <tr>
        <td>Employee ID</td>
        <td>Employee Name</td>
        <td>Department</td>
        <td>Designation</td>
        <td>Salary</td>
        <td>Joining Date</td>
        <td>Email</td>
    </tr>';
    while ($row=$result->fetch_assoc()) {
        $html.='<tr>
            <td>'.$row["employee_id"].'</td>
            <td>'.$row["employee_name"].'</td>
            <td>'.$row["department"].'</td>
            <td>'.$row["designation"].'</td>
            <td>'.$row["salary"].'</td>
            <td>'.$row["joining_date"].'</td>
            <td>'.$row["email"].'</td></tr>';
            

    }
    $html.='</table></body></html>';
    $pdf->writeHTML($html,true,false,true,false,"");
    $pdf->Output("emp.pdf","D");
?>