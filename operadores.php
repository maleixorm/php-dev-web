<?php

function quebraLinha() {
    echo "<br><br>";
}

$num1 = 13;
$num2 = 4;

echo ($num1+$num2);
quebraLinha();
echo ($num1-$num2);
quebraLinha();
echo ($num1*$num2);
quebraLinha();
echo ($num1/$num2);
quebraLinha();
echo ($num1%$num2);

$a = 7;

echo $a += 5;
quebraLinha();
echo $a -= 5;
quebraLinha();
echo $a *= 5;
quebraLinha();
echo $a += $a;
quebraLinha();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h3>Pós-incremento</h3>
    <?php
        $b = 7;
        echo "O valor contido em b é $b <br>";
        echo "O valor contido em b após o incremento é " . $b++ . " <br>";
        echo "O valor atualizado é $b ";
    ?>
    <h3>Pré-incremento</h3>
    <?php
        $b = 7;
        echo "O valor contido em b é $b <br>";
        echo "O valor contido em b após o incremento é " . ++$b . " <br>";
        echo "O valor atualizado é $b ";
        ?>
    <h3>Pós-decremento</h3>
    <?php
        $b = 7;
        echo "O valor contido em b é $b <br>";
        echo "O valor contido em b após o incremento é " . $b-- . " <br>";
        echo "O valor atualizado é $b ";
    ?>
    <h3>Pré-decremento</h3>
    <?php
        $b = 7;
        echo "O valor contido em b é $b <br>";
        echo "O valor contido em b após o incremento é " . --$b . " <br>";
        echo "O valor atualizado é $b ";
    ?>
</body>
</html>