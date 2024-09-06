<?php
/*
function gerarNumeros($inicio = 10, $fim = 20)
{
    $lista = [];
    if ($fim <= $inicio) {
        echo "Não dá para continuar";
    } else {
        for ($k = $inicio; $k <= $fim; $k++) {
            $lista [] = $k;
        }
    }
    return $lista;
}

$variavel = gerarNumeros(10, 15);
$numero_aleatorio = rand (0, 1000);
var_dump($variavel);
echo $numero_aleatorio;*/

$preco = 4.30;

echo "R$" . number_format ($preco, 2, ',', '.');

