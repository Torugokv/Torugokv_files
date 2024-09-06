<?php

require __DIR__ . "/vendor/autoload.php";

use app\classes\UploadFoto;

$upload = new UploadFoto('arquivo.png');

// echo $upload->teste();
//Atualizar o composer com o comando: :"composer dump-autoload";

// $upload->file('foto.png');
// $upload->extension();
// $upload->rename();

$upload->validation();
echo $upload->upload();