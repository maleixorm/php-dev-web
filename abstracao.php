<?php

class Funcionario {
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }

    function getNome(){
        return $this->nome;
    }
    
    function getNumFilhos(){
        return $this->numFilhos;
    }

    function resumirCadFunc() {
        return "$this->nome possui $this->numFilhos filho(s).<br>";
    }

    function modificarNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }
}

$y = new Funcionario();
$y->setNome('José');
$y->setNumFilhos(4);
echo $y->resumirCadFunc();

echo '<hr>';

$x = new Funcionario();
$x->setNome('Maria');
$x->setNumFilhos(2);
echo $x->resumirCadFunc();