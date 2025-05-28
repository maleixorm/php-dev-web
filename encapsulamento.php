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

class Filho extends Pai {
    private $nome;
    private $idade;

    function __construct($nome, $sobrenome, $humor, $idade)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->humor = $humor;
        $this->idade = $idade;
    }

    public function getAtributo($attr) {
        return $this->$attr;
    }

    public function setAtributo($attr, $value) {
        return $this->$attr = $value;
    }

    private function executarMania() {
        echo 'Cantar';
    }

    protected function responder() {
        echo 'Olá';
    }
}

$pai = new Pai('Lucas', 'Costa', 'Feliz');
$filho = new Filho('André', 'Oliveira', 'Alegre', 14);

echo $pai->__get('nome');
echo '<br>';
$pai->__set('nome', 'Ivo');
echo $pai->__get('nome');
echo '<br>';
echo $pai->executarAcao();

echo '<hr>';

echo $filho->getAtributo('nome');
echo '<br>';
$filho->setAtributo('nome', 'Michel');
echo $filho->getAtributo('nome');
echo '<br>';
echo $filho->executarAcao();

echo '<hr>';

echo '<pre>';
print_r(get_class_methods($filho));
echo '</pre>';

echo '<pre>';
print_r($filho);
echo '</pre>';