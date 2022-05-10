<?php

for($i = 0; $i < 10; $i++){
    echo $i ."<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>
    <ul>
        <?php
        for($i = 1; $i <= 10; $i++){
            ?>
            <li>
                2 * <?=$i?> = <?= 2 * $i?>
            </li>
            <?php
        }
        ?>
    </ul>
    <br>
    <ul>
        <?php
        for($i = 1; $i <= 10; $i++){
            for($j = 1; $j <= 10; $j++){
                ?>
                <li>
                    <?=$i?> * <?=$j?> = <?=$i * $j?>
                </li>
                <?php
            }
            echo "<hr>";
        }
        ?>
    </ul>
</body>
</html>