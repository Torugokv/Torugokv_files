<?php

namespace app\classes;

use app\traits\ValidationFile;

class UploadFile extends Upload {

    use ValidationFile;

    private $extensions = ['zip', 'rar', 'pdf'];

    public function __construct($file){

        parent :: __construct($file);

    }

    public function upload (){
        
        return "Gerou o arquivo {$this->rename()}";
    }

}