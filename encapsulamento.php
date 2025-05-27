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

    public function __get($attr) {
        return $this->$attr;
    }

    public function __set($attr, $value) {
        if (strlen($value) >= 3) {
            $this->$attr = $value;
        }
    }

    private function executarMania() {
        echo 'Assobiar';
    }

    protected function responder() {
        echo 'Oi';
    }

    public function executarAcao() {
        $this->executarMania();
        echo '<br>';
        $this->responder();
    }
}

$pai = new Pai('Lucas', 'Costa', 'Feliz');

echo $pai->__get('nome');
echo '<br>';
$pai->__set('nome', 'Ivo');
echo $pai->__get('nome');
echo '<br>';
echo $pai->executarAcao();