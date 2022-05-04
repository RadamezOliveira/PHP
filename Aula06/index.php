<?php
$idade = 19;
$senha = "123";
$acesso = true;

echo "Idade: " . $idade . "<br><br>";

if($idade >= 18){
    echo "Ok";
} else {
    echo "Inválido";
}

echo "<br><br>";

//== igual
//=== idêntico nome e tipo
//!= diferente, também pode ser <>
//!== diferente nome e tipo 

if($senha == "123"){
    echo "Acesso autorizado, nivel 1";
} else if($senha == "1234"){
    echo "Acesso autorizado, nivel 2";
} else {
    echo "Acesso negado";
}

echo "<br><br>";

if($idade >= 18 && $senha == "1234"){
    echo "Acesso autorizado";
} else {
    echo "Acesso negado";
}

echo "<br><br>";

if($idade >= 16 && $idade < 18 || $idade > 70){
    echo "Voto é opcional";
} else if($idade >= 18) {
    echo "Voto é obrigatório";
} else {
    echo "Não pode votar";
}

echo "<br><br>";

if(!$acesso){ //if sempre espera true como resultado, para negar basta por ! antes da variável
    echo "Acesso autorizado";
} else {
    echo "Acesso negado";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-Else</title>
</head>
<body>
    <?php
    if($idade >= 18 && $acesso){
        ?>
        <h1 style= 'color:green'>Acesso autorizado</h1>
        <?php
    } else {
        ?>
        <h1 style= 'color:red'>Acesso negado</h1>
        <?php
    }
  ?>
</body>
</html>