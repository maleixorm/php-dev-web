<?php

function edentar($x) {
    echo '<pre>';
    print_r($x);
    echo '</pre>';
}

$listaDeFrutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

edentar($listaDeFrutas);

$existe = in_array('Maçã', $listaDeFrutas);

if ($existe) {
    echo 'O valor pesquisado foi encontrado no array!';
} else {
    echo 'O valor pesquisado não foi encontrado no array!';
}

echo "<br>" . array_search('Maçã', $listaDeFrutas);