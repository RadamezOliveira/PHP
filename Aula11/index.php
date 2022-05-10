<?php
$arrayNomes = array("Patricia", "Radaméz", "Eduardo", "Caroline", "Thiago", "Clara");
//$arrayNomes = ["Patricia", "Radaméz", "Eduardo", "Caroline", "Thiago", "Clara"]; também funciona direto com colchetes

//for($i = 0; $i < count($arrayNomes); $i++){
//    echo $arrayNomes[$i] . "<br>";
//}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="slNomes" id="slNomes">
        <?php
        for($i = 0; $i < count($arrayNomes); $i++){
            ?>
            <option value="<?=$i;?>"><?=$arrayNomes[$i]?></option>
            <?php
        }
        ?>
    </select>
    <button onclick="alert(document.getElementById('slNomes').value);">Selecionar</button>
</body>
</html>

<br>
<hr>

<?php

$notas = [
    "Aluno 1" => [
        "Nome"=> "Bruna",
        "Nota"=> 10
    ],
    "Aluno 2" => [
        "Nome"=> "João",
        "Nota"=> 8
    ]
    ];
    echo $notas["Aluno 1"] ["Nome"];
?>

<br>
<hr>

<?php

$array = [];

for($i = 0; $i <= 100; $i++){
    $array[] = $i;
}

for($i = 0; $i <= 100; $i++){
    echo "2 * {$i} = " .$array[$i] * 2 ."<br>";
}