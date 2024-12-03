<?php

namespace app\classes;
class UploadFoto extends Upload{

    const propriedade_teste = 'propriedade_teste';

    protected $extensions = ['png', 'jpg'];
    private $upload;

    public static function teste(){
        return "teste";
    }

    public function upload (){

        //return $this->teste();
        // return "Gerou a foto {$this->rename()}";
    }
}