<?php

function enviarArquivo($error, $size, $name, $tmp_name){

    require_once('lib/conexao.php');

    if($error)
        die("Falha ao enviar arquivo");

    if($size > 20971520)
        die("Arquivo muito grande!! Max: 20MB");

    $pasta = "arquivos/"; 
    $nomeDoArquivo = $name;
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

    if($extensao != "jpg" && $extensao != 'png')
        die("Tipo de arquivo não aceito");

    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
    $deu_certo = move_uploaded_file($tmp_name, $path);
        if($deu_certo){
            return $path;
        } else
            return false;
    }
?>