<?php

function calcularValorImposto($salario) {
    $imposto = $salario <= 1903.98 ? 0 : ($salario > 1903.98 && $salario <= 2826.65 ? $salario * 0.075 : ($salario > 2826.65 && $salario < 3751.05 ? $salario * 0.15 : ($salario > 371.05 && $salario <= 4664.68 ? $salario * 0.225 : $salario * 0.275)));
    return "Você recebeu R$ " . $salario . " e terá R$ " . $imposto . " de alíquota de imposto descontado neste mês!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função que calcula o imposto de renda</title>
</head>
<body>
    <h1>Receita Federal</h1>
    <h3>Cálculo do Imposto de Renda</h3>
    <form action="ir.php" method="get">
        <label for="salario">Salário: </label>
    </form>
    <p><?= calcularValorImposto(2914.88); ?></p>
</body>
</html>