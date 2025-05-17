<?php

function quebrarLinha() {
    echo '<br>';
}

function separarLinha() {
    echo '<hr>';
}

$texto = 'Curso Completo de PHP';

echo $texto;
quebrarLinha();
echo strtolower($texto);
separarLinha();

echo $texto;
quebrarLinha();
echo strtoupper($texto);
separarLinha();

echo $texto;
quebrarLinha();
echo ucfirst($texto);
separarLinha();

echo $texto;
quebrarLinha();
echo strlen($texto);
separarLinha();

echo $texto;
quebrarLinha();
echo str_replace('PHP', 'Java',$texto);
separarLinha();

echo $texto;
quebrarLinha();
echo substr($texto, 6, 8);
separarLinha();