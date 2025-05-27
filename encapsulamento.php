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

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
}

$pai = new Pai('Marcos', 'Aleixo', 'Feliz');

echo $pai->getNome();
echo '<br>';
$pai->setNome('Mateus');
echo $pai->getNome();