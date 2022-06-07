<?php
include_once __DIR__.'/../traits/Image.php';

class Product {
    protected $price;
    protected $description;

    function __construct($_price, $_description){
        $this->price = $_price;
        $this->description = $_description;
    }

    public function setPrice($_price){
        $this->price = $_price;
    }
    public function getPrice(){
        return $this->price;
    }

    public function setDescription($_description){
        $this->description = $_description;
    }
    public function getDescription(){
        return $this->description;
    }

    use Image;
}

?>