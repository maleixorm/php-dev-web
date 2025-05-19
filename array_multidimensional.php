<?php

$listaDeCoisas = [
    'frutas' => [1 => 'Banana', 'Maçã', 'Morango', 'Uva'],
    'pessoas' => [1 => 'João', 'Maria', 'José', 'Ana']
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensional</title>
</head>
<body>
    <pre>
        <?= print_r($listaDeCoisas); ?>
    </pre>
    <hr>
    <pre>
        <?= $listaDeCoisas['frutas'][3]; ?>
        <hr>
        <?= $listaDeCoisas['pessoas'][3]; ?>
    </pre>
</body>
</html>
