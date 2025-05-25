<?php

class Funcionario {
    public $nome = 'José';
    public $telefone = '11 99999-8888';
    public $numFilhos = 2;

    function resumirCadFunc() {
        return "$this->nome possui $this->numFilhos filho(s).<br>";
    }

    function modificarNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }
}

$y = new Funcionario();
echo $y->resumirCadFunc();

$y->modificarNumFilhos(3);
echo $y->resumirCadFunc();

echo '<hr>';

$x = new Funcionario();
echo $x->resumirCadFunc();
$x->modificarNumFilhos(3);
echo $x->resumirCadFunc();