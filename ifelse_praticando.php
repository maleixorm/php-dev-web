<?php

$usuarioCartaoLoja = true;
$valorCompra = 95;
$valorFrete = 50;
$descontoFrete = true;

if ($usuarioCartaoLoja && $valorCompra >= 400) {
    $valorFrete = 0;
} elseif ($usuarioCartaoLoja && $valorCompra >= 200) {
    $valorFrete = 25;
} elseif ($usuarioCartaoLoja && $valorCompra >= 100) {
    $valorFrete = 10;
} else {
    $descontoFrete = false;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
</head>
<body>
    <h1>Detalhes do pedido</h1>
    <p>Possui cartão da loja?
        <strong><?php
            if ($usuarioCartaoLoja) {
                echo 'SIM';
            } else {
                echo 'NÃO';
            }
        ?></strong>
    </p>
    <p>Valor da compra: <strong>R$ <?= $valorCompra; ?></strong></p>
    <p>Recebeu desconto no frete?
        <strong><?php
            if ($descontoFrete) {
                echo 'SIM';
            } else {
                echo 'NÃO';
            }
        ?></strong>
    </p>
    <p>Valor do frete: <strong>R$ <?= $valorFrete; ?></strong></p>
</body>
</html>