<?php

require 'vendor/autoload.php';

class ShoppingCart {

    private $get = [];
    private $product;

    public function __call($name, $value){
        var_dump($name);
    }

    // public function __set($name, $value){
    //     if(!property_exists($this, $name));
    //     $this->get[$name][] = $value;
    // }

    // public function __get($name) {
    //     var_dump($this->get[$name]);
    // }

}

$shoppingCart = new ShoppingCart;
$shoppingCart->product = 'Monitor';
$shoppingCart->product = 'Placa de Video';
$shoppingCart->product;
