<?php
/*
function Ola($nome, $email, $telefone = ""){
    return "Olá mundo, meu nome é {$nome}, meu email é {$email} e meu telefone é {$telefone}";
}

echo Ola("Radamez", "radamezo.liveira@gmail.com");
*/

function Ajuste($p1, $p2){
    return (($p1 * $p2) / 4);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <h1>
        <?=Ajuste(2, 10)?>
    </h1>
    <hr>
    <ul>
        <?php
        for($i = 0; $i < 10; $i++){
            ?>
            <li>
                <?=Ajuste($i, $i * 6)?>
            </li>
            <?php
        }
        ?>
    </ul>
</body>
</html>