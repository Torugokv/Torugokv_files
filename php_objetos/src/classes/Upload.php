<?php

namespace app\classes;

class Upload {
    
    private $file;
    protected $newName;

    public function __construct($file) {
        $this->file = $file;
    }

    protected function extension() {
        return pathinfo($this->file, PATHINFO_EXTENSION);
    }

    protected function rename() {
        $uniqId = uniqid(true);
         return $uniqId . '.' . $this->extension();
    }
}
