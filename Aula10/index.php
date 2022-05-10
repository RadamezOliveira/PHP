<?php

$i = 1;
do{
    echo "Numero {$i}<br>";
    $i++;
}while($i <= 10);
?>
<hr>
<?php
$j = 0;
do {
    echo "Valor: {$j}<br>";
    $j++;
} while ($j ==0);
?>

<hr>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do-While</title>
</head>
<body>
    <ul>
        <?php
        $valor = 1;
        do{
            ?>
            <li>
                Valor = <?=$valor?>
            </li>
            <?php
            $valor++;
        } while($valor <=10);
        ?>
    </ul>
</body>
</html>