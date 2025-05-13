<?php
// string
$nome = "Marcos Aleixo";
// int
$idade = 37;
// float
$peso = 142.5;
// boolean
$fumante = false;
if ($fumante) {
    $fuma = "Sim";
} else {
    $fuma = "Não";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis no PHP</title>
</head>
<body>
    <h1>Ficha Cadastral</h1>    
    <br>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fuma ?></p>
</body>
</html>