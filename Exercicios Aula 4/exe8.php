Crie uma função em PHP que receba a altura e o peso de uma pessoa, calcule seu IMC de acordo com a
fórmula abaixo:
IMC = Peso dividido pela altura ao quadrado ( peso ÷ (altura²)).
A função deve retornar uma string (magreza, normal. sobrepeso ou obesidade) de acordo com a tabela abaixo.

<?php 

function CalculoIMC($peso, $altura){
    $imc = $peso / ($altura * $altura);

    if($imc < 18.5){
        $resultado = "Magreza"; 
    }
    else if($imc >= 18.5 && $imc < 24.9){
        $resultado = "Normal";
    }
    else if($imc >= 29.4 && $imc <=30){
        $resultado = "Sobrepeso";
    }
    else{
        $resultado = "obesidade";
    }
    return $resultado;
}

$resIMC = CalculoIMC(50.3, 1.70);
echo "IMC = $resIMC";

