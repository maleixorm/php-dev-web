<?php

namespace A;

class Cliente implements \A\Cadastro {
    public $nome;
    function __construct($nome)
    {
        $this->nome = $nome;
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    }
    public function __get($attr)
    {
        return $this->$attr;
    }
    public function salvar()
    {
        echo 'Salvar';
    }
}

interface Cadastro {
    public function salvar();
}

namespace B;

class Cliente implements \B\Cadastro {
    public $nome;
    function __construct($nome)
    {
        $this->nome = $nome;
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    }
    public function __get($attr)
    {
        return $this->$attr;
    }
    public function remover()
    {
        echo 'Remover';
    }
}

interface Cadastro {
    public function remover();
}

$c = new \A\Cliente('John');
$cl = new Cliente('James');

print_r($c);
echo '<hr>';
print_r($cl);