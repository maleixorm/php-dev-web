<?php

class Carro {
    public $placa;
    public $cor;
    public $teto_solar;

    function __construct($placa, $cor, $teto_solar) {
        $this->placa = $placa;
        $this->cor = $cor;
        $this->teto_solar = $teto_solar;
    }

    function acelerar() {
        echo 'Acelerar';
    }

    function abrirTetoSolar() {
        if ($this->teto_solar) {
            echo 'Abrir teto solar.';
        } else {
            echo 'Carro não tem teto solar.';
        }  
    }

    function alterarPosicaoVolante() {
        echo 'Posição do volante alterada.';
    }
}