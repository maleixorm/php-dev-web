<?php

function quebrarLinha() {
    echo '<br><br>';
}

$array = 'string';
$array2 = ['notebook', 'tablet', 'smartphone'];
$retorno = is_array($array);
$retorno2 = is_array($array2);

if ($retorno) {
    echo 'Sim, é um array';
} else {
    echo 'Não, não é um array';
}

quebrarLinha();

if ($retorno2) {
    echo 'Sim, é um array';
} else {
    echo 'Não, não é um array';
}

quebrarLinha();

$array3 = [1 => 'a', 7 => 'b', 18 => 'c'];

echo '<pre>';
    echo print_r($array3);
echo '</pre>';

$chaves_array = array_keys($array3);
echo '<pre>';
    echo print_r($chaves_array);
echo '</pre>';

$array4 = ['notebook', 'tablet', 'smartphone', 'monitor', 'teclado', 'mouse', 'gabinete'];
sort($array4);
echo '<pre>';
    echo print_r($array4);
echo '</pre>';

$array5 = ['notebook', 'tablet', 'smartphone', 'monitor', 'teclado', 'mouse', 'gabinete'];
asort($array5);
echo '<pre>';
    echo print_r($array5);
echo '</pre>';

$array6 = ['notebook', 'tablet', 'smartphone', 'monitor', 'teclado', 'mouse', 'gabinete'];
echo '<pre>';
    echo print_r($array6);
    quebrarLinha();
    echo count($array6);
echo '</pre>';

$so = ['osx', 'windows'];
$so2 = ['solaris', 'fedora'];
$so3 = ['kali', 'debian'];

$novo = array_merge($so, $so2, $so3);
echo '<pre>';
    echo print_r($novo);
echo '</pre>';

$data = '26/04/2018';
$array_retorno = explode('/', $data);
echo '<pre>';
    echo $data;
    quebrarLinha();
    echo print_r($array_retorno);
    quebrarLinha();
    echo $array_retorno[1] . '-' . $array_retorno[0] . '-' . $array_retorno[2];
echo '</pre>';

$arr = ['a', 'b', 'c', 'd', 'e'];
$str = implode('-', $arr);
echo '<pre>';
    echo print_r($str);
    quebrarLinha();
echo '</pre>';