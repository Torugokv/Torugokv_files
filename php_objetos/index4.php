<?php

namespace Torugokv\Obj;

require "vendor/autoload.php";

abstract class Email{

    public function __contruct(){

    }
    public static function who(){
        return "Alexandre";
    }

    public static function send(){
        return static ::who();
    }
}

//Self -> Própria Classe;
//Static -> Objeto;

class SendEmail extends Email{

    public function teste(){
        return "teste";
    }
    public static function who(){
       // return $this->teste();
    }
}

echo SendEmail:: send();