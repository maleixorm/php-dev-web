<?php

class Funcionario {
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    function __get($atributo)
    {
        return $this->$atributo;
    }

    // function setNome($nome) {
    //     $this->nome = $nome;
    // }

    // function setTelefone($telefone) {
    //     $this->telefone = $telefone;
    // }

    // function setNumFilhos($numFilhos) {
    //     $this->numFilhos = $numFilhos;
    // }

    // function getNome() {
    //     return $this->nome;
    // }

    // function getTelefone() {
    //     return $this->telefone;
    // }
    
    // function getNumFilhos() {
    //     return $this->numFilhos;
    // }

    function resumirCadFunc() {
        return "Nome: $this->nome <br>
                Telefone: $this->telefone <br>
                Qtd.Filhos: $this->numFilhos filho(s).<br>
                Cargo: $this->cargo <br>
                Salário: R$ $this->salario,00";
    }

    function modificarNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }
}

$y = new Funcionario();
$y->__set('nome', 'José');
$y->__set('telefone', '11 99999-8888');
$y->__set('numFilhos', 4);
$y->__set('cargo', 'Gerente');
$y->__set('salario', 8000);
echo $y->resumirCadFunc();

echo '<hr>';

$x = new Funcionario();
$x->__set('nome', 'Maria');
$x->__set('telefone', '31 98888-7777');
$x->__set('numFilhos', 2);
$x->__set('cargo', 'Diretora de Filial');
$x->__set('salario', 12000);
echo $x->resumirCadFunc();