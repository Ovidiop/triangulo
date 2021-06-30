<?php

$cateto1 = 3;
$cateto2 = 4;
$hipotenusa = null;


$hipotenusa = sqrt(pow($cateto1, 2) +pow($cateto2, 2));

echo'Calculo de la Hipotenusa del triangulo', '<br/>';
echo'Cateto 1 del Triangulo: ' .$cateto1, '<br/>';
echo'Cateto 2 del Triangulo: ' .$cateto2, '<br/>';
echo'Hipotenusa del Triangulo: ' .$hipotenusa, '<br/>';


?>