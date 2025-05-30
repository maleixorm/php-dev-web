<?php

namespace A;

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
        $this->$attr;
    }
    
    public function salvar()
    {
        echo 'Salvar';
    }
    
    public function remover() {
        echo 'Remover';
    }
}

interface Cadastro {
    public function salvar();
}