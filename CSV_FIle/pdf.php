<?php
include "db.php";
require "vendor/autoload.php";
$result=$conn->query("select * from Person");
$pdf = new TCPDF();
$pdf->AddPage();
$pdf->setFont("times","I","12");
$html = '<table>';
while ($row=$result->fetch_assoc()) {
    $html .='<tr>
        <td>'.$row["id"].'</td>
        <td>'.$row["name"].'</td>
        <td>'.$row["age"].'</td>
        <td>'.$row["email"].'</td>
        <td>'.$row["address"].'</td>
    </tr>';
}
$html .='</table>';
$pdf->writeHTML($html,true,false,true,false,"");
$pdf->Output("data.pdf","D");


?>