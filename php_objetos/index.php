<?php

<<<<<<< HEAD
require "vendor/autoload.php";

Class ShoppingCart {
    private $get;
}
=======
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
>>>>>>> b03bc11c1bd1f5324ffb2d769c3b84c8a2264587
