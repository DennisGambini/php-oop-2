<?php
require_once __DIR__.'./Product.php';
require_once __DIR__.'/../traits/TypeBrand.php';

class Game extends Product {
    protected $type;
    protected $brand;
    protected $model;

    function __construct($_price, $_description, $_type, $_model, $_brand){
        parent::__construct($_price, $_description);
        $this->type = $_type;
        $this->brand = $_brand;
        $this->model = $_model;
    }

    function setModel($_model){
        $this->model = $_model;
    }
    function getModel(){
        return $this->model;
    }

    use TypeBrand;
}

?>