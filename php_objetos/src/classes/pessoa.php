<?php

class Pessoa {
    public $idade;
    public $nome;
    public $email;

    public function dados(){
        return "Meu nome é {$this->nome}, minha idade é {$this->idade}, meu email é {$this->email}";
    }
}
