<?php

interface EquipamentoEletronicoInterface {
    public function ligar();
    public function desligar();
}

class Geladeira implements EquipamentoEletronicoInterface {
    public function ligar() {
        echo 'Ligar';
    }
    
    public function desligar() {
        echo 'Desligar';
    }

    public function abrirPorta() {
        echo 'Abrir porta.';
    }
}

class Tv implements EquipamentoEletronicoInterface {
    public function ligar() {
        echo 'Ligar';
    }
    
    public function desligar() {
        echo 'Desligar';
    }

    public function trocarCanal() {
        echo 'Trocar canal.';
    }
}

$geladeira = new Geladeira();
$tv = new Tv();