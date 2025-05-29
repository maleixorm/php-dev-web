<?php

interface Mamifero {
    public function respirar();
}

interface Terrestre {
    public function andar();
}

interface Aquatico {
    public function nadar();
}

interface Animal {
    public function comer();
}

interface Ave extends Animal {
    public function voar();
}

class Humano implements Mamifero,Terrestre {
    public function respirar() {
        echo 'Respirar';
    }

    public function andar() {
        echo 'Andar';
    }

    public function conversar() {
        echo 'Conversar';
    }
}

class Baleia implements Mamifero, Aquatico {
    public function respirar() {
        echo 'Respirar';
    }

    public function nadar()
    {
        echo 'Nadar';
    }

    protected function esguichar() {
        echo 'Esguichar';
    }
}

class Papagaio implements Ave {
    public function comer() {
        echo 'Comer';
    }

    public function voar() {
        echo 'Voar';
    }
}