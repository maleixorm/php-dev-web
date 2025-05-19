<?php
// Array sequêncial
$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];
$lista_frutas[] = 'Abacaxi';
// Array associativo
$lista_frutas2 = ['a' => 'Banana', 'b' => 'Maçã', 'c' => 'Morango', 'd' => 'Uva', 'e' => 'Abacate'];
$lista_frutas2['f'] = 'Abacaxi';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Básico</title>
</head>
<body>
    <pre>
        <?= var_dump($lista_frutas); ?>
    </pre>
    <hr>
    <pre>
        <?= $lista_frutas[2]; ?>
    </pre>
    <hr>
    <pre>
        <?= print_r($lista_frutas); ?>
    </pre>
    <hr>
    <pre>
        <?= print_r($lista_frutas2); ?>
    </pre>
    <hr>
    <pre>
        <?= $lista_frutas2['e']; ?>
    </pre>
</body>
</html>