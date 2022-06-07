<?php
trait TypeBrand {

    function setType($_type) {
        $this->type = $_type;
    }
    function getType() {
        return $this->type;
    }

    function setBrand($_brand) {
        $this->brand = $_brand;
    }
    function getBrand() {
        return $this->brand;
    }
}


?>