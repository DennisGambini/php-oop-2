<?php
require_once __DIR__.'./Product.php';
require_once __DIR__.'/../traits/TypeBrand.php';
require_once __DIR__.'/../traits/ProdName.php';

class Food extends Product {
    protected $name;
    protected $type;
    protected $brand;

    function __construct($_price, $_description, $_name, $_type, $_brand){
        parent::__construct($_price, $_description);
        $this->name = $_name;
        $this->type = $_type;
        $this->brand = $_brand;
    }

    use TypeBrand;
    use ProdName;
}

?>