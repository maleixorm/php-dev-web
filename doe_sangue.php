<?php

$nome = htmlspecialchars($_GET["nome"]);
$idade = htmlspecialchars($_GET["idade"]);
$peso = htmlspecialchars($_GET["peso"]);

if ($idade >= 16 && $idade <= 69 && $peso >= 50) {
    $message = "Olá $nome, você atende aos requisitos para doar sangue!";
} else {
    $message = "Olá $nome, você não atende aos requisitos para doar sangue!";
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doe Sangue</title>
</head>
<body>
    <form action="doe_sangue.php" class="container" method="$_GET">
        <h1>Formulário de doação de Sangue</h1>
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome">
        <label for="idade">Idade: </label>
        <input type="number" name="idade" id="idade">
        <label for="peso">Peso: </label>
        <input type="number" name="peso" id="peso">
        <button type="submit">Avaliar</button>
        <button type="reset">Limpar</button>
    </form>
    <br><br><br>
    <?= empty($nome) ? "" : $message; ?>
</body>
</html>