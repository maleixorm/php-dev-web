<?php

$registros = [
    ['titulo' => 'notícia 1', 'conteudo' => 'conteúdo 1'], 
    ['titulo' => 'notícia 2', 'conteudo' => 'conteúdo 2'], 
    ['titulo' => 'notícia 3', 'conteudo' => 'conteúdo 3'],
    ['titulo' => 'notícia 4', 'conteudo' => 'conteúdo 4']
];

// Utilizando o while

$idx = 0;
while ($idx < count($registros)) {
    echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
    echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
    echo '<hr>';
    $idx++;
}

// Utilizando o for
echo '<br><br>';

for ($i=0; $i < count($registros) ; $i++) { 
    echo '<h3>' . $registros[$i]['titulo'] . '</h3>';
    echo '<p>' . $registros[$i]['conteudo'] . '</p>';
    echo '<hr>';
}