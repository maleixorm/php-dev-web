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
}

$carro = new Carro('ABC1234', 'Branco', false);
$moto = new Moto('DEF1122', 'Preto', true);

echo '<pre>';
print_r($carro);
echo '<br>';
print_r($moto);
echo '</pre>';
echo '<hr>';

$carro->abrirTetoSolar();
echo '<br>';
$carro->acelerar();
echo '<br>';
$carro->freiar();
echo '<hr>';
$moto->acelerar();
echo '<br>';
$moto->empinar();
echo '<br>';
$moto->freiar();