<?php

function quebrarLinha() {
    echo '<br>';
}

function separarLinha() {
    echo '<hr>';
}

echo date('d/m/Y  H:i');
separarLinha();
echo date_default_timezone_get();
separarLinha();
date_default_timezone_set('America/Los_Angeles');
echo date_default_timezone_get();
separarLinha();
echo date('d/m/Y - H:i');
separarLinha();
$data_inicial = '1988-02-21';
$data_hoje = '2025-05-18';

$time_inicial = strtotime($data_inicial);
$time_hoje = strtotime($data_hoje);

echo $data_inicial . ' - ' . $time_inicial;
quebrarLinha();
echo $data_hoje . ' - ' . $time_hoje;

$time_diferenca = $time_hoje - $time_inicial;
separarLinha();
echo $time_diferenca;
$segundosPorAno = 365.6 * 24 * 60 * 60;
separarLinha();
echo floor($time_diferenca / $segundosPorAno) . " Anos.";