<?php

class Pai {
    private $nome;
    protected $sobrenome;
    public $humor;

    function __construct($nome, $sobrenome, $humor)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->humor = $humor;
    }
}

$pai = new Pai('Marcos', 'Aleixo', 'Feliz');

echo $pai->humor;