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
        echo 'Acelerar!';
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

class Moto {
    public $placa;
    public $cor;
    public $contra_peso_guidao;

    function __construct($placa, $cor, $contra_peso_guidao)
    {
        $this->placa = $placa;
        $this->cor = $cor;
        $this->contra_peso_guidao = $contra_peso_guidao;
    }

    function acelerar() {
        echo 'Acelerar!';
    }

    function empinar() {
        echo 'Empinar';
    }
}

$carro = new Carro('ABC1234', 'Branco', true);
$moto = new Moto('DEF1122', 'Preta', true);

echo '<pre>';
print_r($carro);
echo '<br>';
print_r($moto);
echo '</pre>';