<?php
require_once __DIR__.'./Product.php';
require_once __DIR__.'/../traits/ProdName.php';

class Animal extends Product {
    protected $name;
    protected $specie;

    function __construct($_price, $_description, $_name, $_specie) {
        parent::__construct($_price, $_description);
        $this->name = $_name;
        $this->specie = $_specie;
    }

    use ProdName;
}

?>