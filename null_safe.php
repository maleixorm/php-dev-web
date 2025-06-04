<?php

$objeto = null;
$objeto?->total();

class Funcionario {
    public function __construct(private string $nome, private float $salario)
    {
        
    }

    public function info() {
        return "Nome: $this->nome - Salário: $this->salario";
    }
}

class FolhaPagamento {
    private $funcionarios;

    public function __construct()
    {
        $this->funcionarios = [
            new Funcionario('Mary', 12000),
            new Funcionario('John', 15000),
            new Funcionario('Dean', 10000),
            new Funcionario('Sam', 8000)
        ];
    }
    
    public function getTotalFuncionarios() {
        return count($this->funcionarios);
    }

    public function getFuncionario($i) {
        return $this->funcionarios[$i];
    }
}

$folhaPagamento = new FolhaPagamento();
echo $folhaPagamento?->getTotalFuncionarios();
echo "<br>";
print_r($folhaPagamento?->getFuncionario(1)?->info());