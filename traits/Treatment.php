<?php

trait Treatment {
    protected $discount = 0;

    public function getTreatment(){
        return $this->super_treatment;
    }

    public function getDiscount(){
        return $this->super_treatment ? 20 : $this->discount;
    }
}

?>