<?php

namespace app\classes;

use app\classes\Upload;

use app\traits\ValidationFile;

class UploadFoto extends Upload {

    use ValidationFile;

    private $extensions = ['png', 'jpg'];

    public function upload (){

        return $this->teste();
        // return "Gerou a foto {$this->rename()}";
    }
}
