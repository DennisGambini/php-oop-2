<?php
require_once __DIR__.'./Product.php';
require_once __DIR__.'/../traits/TypeBrand.php';

class Food extends Product {
    protected $type;
    protected $brand;

    function __construct($_price, $_description, $_type, $_brand){
        parent::__construct($_price, $_description);
        $this->type = $_type;
        $this->brand = $_brand;
    }

    use TypeBrand;
}

?>