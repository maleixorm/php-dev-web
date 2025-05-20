<?php

function quebrarLinha() {
    echo '<br><br>';
}

$funcionario1 = null;
$funcionario2 = '';
$funcionario3 = false;

if (is_null($funcionario1)) {
    echo 'Sim, a variável é null.';
} else {
    echo 'Não, a variável não é null.';
}

quebrarLinha();

if (is_null($funcionario2)) {
    echo 'Sim, a variável é null.';
} else {
    echo 'Não, a variável não é null.';
}

quebrarLinha();

if (is_null($funcionario3)) {
    echo 'Sim, a variável é null.';
} else {
    echo 'Não, a variável não é null.';
}

quebrarLinha();

if (empty($funcionario1)) {
    echo 'Sim, a variável é null.';
} else {
    echo 'Não, a variável não é null.';
}

quebrarLinha();

if (empty($funcionario2)) {
    echo 'Sim, a variável é null.';
} else {
    echo 'Não, a variável não é null.';
}

quebrarLinha();

if (empty($funcionario3)) {
    echo 'Sim, a variável é null.';
} else {
    echo 'Não, a variável não é null.';
}

quebrarLinha();