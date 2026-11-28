<?php
include "db.php";
require "vendor/autoload.php";
$result=$conn->query("select * from Person");
$pdf = new TCPDF();
$pdf->AddPage();
$pdf->setFont('helvetica','I','12');
$html='<table>
    <tr> <td>SR no. </td>
    <td>name</td>
    <td>age<td>
    <td>email</td>
    <td>address</td>
    </tr>
';
while ($row=$result->fetch_assoc()) {
    $html .='<tr>
        <td>'.$row["srno"].'</td>
        <td>'.$row["name"].'</td>
        <td>'.$row["age"].'</td>
        <td>'.$row["email"].'</td>
        <td>'.$row["address"].'</td>
    </tr>';
}
$html.='</table>';
$pdf->writeHTML($html,true,false,true,false,'');
$pdf->Output("data.pdf","D");


?>