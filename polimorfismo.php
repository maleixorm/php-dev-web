<?php

class Veiculo {
    public $placa;
    public $cor;

    function __construct($placa, $cor)
    {
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function acelerar() {
        echo 'Acelerar!';
    }

    function freiar() {
        echo 'Freiar!';
    }

    function trocarMarcha() {
        echo 'Desengatar a embreagem com o pé e engatar a marcha com a mão.';
    }
}

class Carro extends Veiculo {
    public $teto_solar;

    function __construct($placa, $cor, $teto_solar) {
        $this->placa = $placa;
        $this->cor = $cor;
        $this->teto_solar = $teto_solar;
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

class Moto extends Veiculo{
    public $contra_peso_guidao;

    function __construct($placa, $cor, $contra_peso_guidao)
    {
        $this->placa = $placa;
        $this->cor = $cor;
        $this->contra_peso_guidao = $contra_peso_guidao;
    }

    function empinar() {
        echo 'Empinar!';
    }

    function trocarMarcha() {
        echo 'Desengatar a embreagem com a mão e engatar a marcha com o pé.';
    }
}

class Caminhao extends Veiculo {}

$carro = new Carro('ABC1234', 'Branco', true);
$moto = new Moto('DEF1122', 'Preto', true);
$caminhao = new Caminhao('GHI3344', 'Azul');

echo '<pre>';
print_r($carro);
echo '<br>';
print_r($moto);
echo '</pre>';
echo '<hr>';

$carro->trocarMarcha();
echo '<hr>';
$moto->trocarMarcha();
echo '<hr>';
$caminhao->trocarMarcha();