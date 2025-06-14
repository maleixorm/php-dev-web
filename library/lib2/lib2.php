<?php

namespace B;

class Cliente implements Cadastro {
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
    
    public function salvar()
    {
        echo 'Salvar';
    }
}

interface Cadastro {
    public function remover();
}