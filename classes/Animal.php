<?php
require_once __DIR__.'./Product.php';

class Animal extends Product {
    protected $name;

    function __construct($_price, $_description, $_name){
        parent::__construct($_price, $_description);
        $this->name = $_name;
    }

    public function setName($_name){
        $this->name = $_name;
    }
    public function getName(){
        return $this->name;
    }
}

?>