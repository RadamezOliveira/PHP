<?php
/*
$cont = 0;
while($cont < 10){
    echo "Cont: . $cont <br>";
    $cont++;
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <ul>
        <?php
        $cont = 0;
        while($cont <= 10){
            if($cont > 6 && $cont < 10){
            ?>
            <li><?=$cont;?></li>
            <?php
            }
            $cont++;
        }
        ?>
    </ul>
</body>
</html>