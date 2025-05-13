<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenação no PHP</title>
</head>
<body>
    <?php
        $nome = "Jorge";
        $cor = "Azul";
        $idade = 29;
        $hobby = "Jogar Videogames";

        echo "Olá " . $nome . "! Vi que sua cor preferida é " . $cor . ".<br>Estou vendo que sua idade é " . $idade . " anos e sua atividade preferida é " . $hobby . ".";
        echo "<br>Olá $nome. Vi que sua cor preferida é $cor. <br>Estou vendo que sua idade é $idade anos e sua atividade preferida é $hobby.";
    ?>
</body>
</html>