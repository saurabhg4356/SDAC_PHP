<?php
function CalculatePerimeter($lenght,$width){
    $pofRectangle = 2*($lenght+$width);
    return $pofRectangle;
}
echo "Perimeter of the Rectangle is : ";
echo CalculatePerimeter(10,5);
?>