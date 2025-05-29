<?php

namespace A;

class Cliente {
    public $nome;
    function __construct($nome)
    {
        $this->nome = $nome;
    }
    public function __get($attr)
    {
        $this->$attr;
    }
}

namespace B;

class Cliente {
    public $nome;
    function __construct($nome)
    {
        $this->nome = $nome;
    }
    public function __get($attr)
    {
        $this->$attr;
    }
}