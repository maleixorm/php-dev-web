<?php

function preformatar($x) {
    echo '<pre>';
    print_r($x);
    echo '</pre>';
}

// $funcionarios = ['João', 'Maria', 'Júlia'];

$funcionarios = [
    ['nome' => 'João', 'salario' => 2500, 'data_nascimento' => '06/03/1970'],
    ['nome' => 'Maria', 'salario' => 3000],
    ['nome' => 'Júlia', 'salario' => 2200]
];
preformatar($funcionarios);
foreach ($funcionarios as $idx => $funcionario) {
    foreach ($funcionario as $idx2 => $valor) {
        echo  "$idx2 - $valor<br>";
    }
    echo '<hr>';
}