<?php

function preformatar($x) {
    echo '<pre>';
    print_r($x);
    echo '</pre>';
}

$itens = ['sofá', 'mesa', 'cadeira', 'fogão', 'geladeira'];

preformatar($itens);

foreach ($itens as $item) {
    echo $item . '<br>';
}