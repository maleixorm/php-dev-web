<?php

/*
class Produto {
    public string $nome;
    public float $valor;

    public function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}
*/

class Produto {
    public function __construct(public string $nome, public float $valor)
    {
        
    }
}

$produto = new Produto(nome: 'Smartphone', valor: 1500);
$produto2 = new Produto(nome: 'Geladeira', valor: 2399);

echo "Produto: " . $produto->nome;
echo "<br>";
echo "Valor: " . $produto->valor;
echo "<hr>";
echo "Produto: " . $produto2->nome;
echo "<br>";
echo "Valor: " . $produto2->valor;
echo "<hr>";

?>