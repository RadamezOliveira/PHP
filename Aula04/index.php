<?php
$adicao = 2 + 5;
$subtraca = 5 - 2;
$multiplicacao = 5 * 2;
$divisao = 5 / 2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <p>2 + 5 = <?=$adicao?> </p>
    <p>5 - 2 = <?=$subtraca?></p>
    <p>5 * 2 = <?=$multiplicacao?></p>
    <p>5 / 2 = <?=$divisao?></p>
    <hr>
    <p>2 + 5 = <?php echo $adicao?></p>
    <hr>
    <p><?=$adicao * $multiplicacao?></p>
    <p><?=$subtraca + $divisao?></p>

    <!--<?php echo $adicao?> e <?=$adicao?> tem o mesmo resultado-->
</body>
</html>