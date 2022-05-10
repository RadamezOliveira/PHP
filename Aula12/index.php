<?php

$frutas = [
    1 => "Abacaxi",
    2 => "Laranja",
    3 => "Banana",
    4 => "Pessego",
    5 => "Maça"
];

foreach($frutas as $Key => $f){
    echo "Key: {$Key} => Value: {$f} <br>";
}
?>

<hr>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
        foreach($frutas as $valor){
            ?>
            <li><?=$valor?></li>
        <?php
        }
        ?>
    </ul>
</body>
</html>

<hr>

<?php

$notas = [
    $aluno1 = [
        "Nome" => "Patricia",
        "Nota" => 10
    ],
    $aluno2 = [
        "Nome" => "Radaméz",
        "Nota" => 8
    ],
    $aluno3 = [
        "Nome" => "Carol",
        "Nota" => 9
    ],
    $aluno4 = [
        "Nome" => "Thiago",
        "Nota" => 7
    ],
    $aluno5 = [
        "Nome" => "Clara",
        "Nota" => 6
    ]
    ];

    foreach($notas as $aluno){
        foreach($aluno as $chave => $nota){
            echo "{$chave} = {$nota} <br>";
        }
        echo "<br>";
    }