Crie uma função que receba 2 valores inteiros como argumentos e retorne a sua soma. 
Se o valor da soma for negativo a função deverá o valor 0.

<?php 
function sumvalues($value0ne, $valunetwo){
    $total = $value0ne + $valunetwo;
    if($total >= 0 )
    return $total;
    else
    return 0;

}

echo "<br>";
echo sumvalues(-1 , -2);
echo "\n";