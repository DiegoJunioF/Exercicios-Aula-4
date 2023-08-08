Crie um script em PHP que crie um vetor de 5 elementos inteiros com valores aleatórios,
entre 0 e 10. Encontre e mostre o menor elemento e sua posição no vetor

<?php
 
$vetor = array (2, 4, 6, 8, 9);

$menorElemento = $vetor[0];
$posicaoMenorElemento = [0];

for ($i = 1; $i <= 5; $i++) 
{
    if ($vetor[$i] < $menorElemento) {
        $menorElemento = $vetor[$i];
        $posicaoMenorElemento = $i;
    }
}

echo "Menor elemento: $menorElemento";
echo "<br>";
echo "Posicao: $posicaoMenorElemento"; 

