Crie uma função em PHP que calcule e imprima o salário reajustado de um funcionário
de acordo com a seguinte regra:
• salários até R$ 3.000,00 , reajuste de 50%
• salários de R$ 3.000,00 ou mais, reajuste de 30%

<?php 

function reajusteSalario($salFuncionario){
    if($salFuncionario > 0 && $salFuncionario < 3000){
        $reajuste = $salFuncionario * 1.5;
    }
    if($salFuncionario >= 3000){
        $reajuste = $salFuncionario * 1.3;
    }
    return $reajuste;
}

$salario = 3100;
$salReajustado = reajusteSalario($salario);

echo "Salario do funcionario: $salario";
echo "<br>Salario reajustado: $salReajustado";

