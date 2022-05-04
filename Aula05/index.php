<?php
//declaração de constantes
//palavra chave define(nome da constante "String", valor da constante)
define("min", 17);
define("max", 45);

$idade = 27;

echo "MIN: " . min . "<br>";
echo "MAX: " . max . "<br>";
echo "IDADE: " . $idade . "<br><br>";

if($idade >= min && $idade <= max){
    echo "Acesso liberado...";
} else {
    echo "Acesso bloqueado...";
}

