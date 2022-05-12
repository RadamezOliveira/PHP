<?php

$salario = 1572.00;
$valorAjuste = 0;

function ajusteSalario($salario, &$valorAjuste){
    $valorAjuste = 300.0;
    return($salario + $valorAjuste);
}

$valorFinal = ajusteSalario($salario, $valorAjuste);

echo "O valor ajustado é de: <strong>R$ {$valorFinal}</strong>, com aumento de: <strong>R$ {$valorAjuste}</strong>";