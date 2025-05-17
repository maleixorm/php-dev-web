<?php

function quebrarLinha() {
    echo '<br>';
}

function separarLinha() {
    echo '<hr>';
}

$numero = 7.63;

echo ceil($numero);
quebrarLinha();
echo floor($numero);
separarLinha();
echo round($numero);
quebrarLinha();
$numero = 7.49;
echo round($numero);
separarLinha();

$num = rand(1, 1000);
echo $num;
quebrarLinha();
separarLinha();
echo sqrt($num);