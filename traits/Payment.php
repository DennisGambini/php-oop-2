<?php
 trait Payment {
    protected $pay_number;
    protected $pay_type;

    function __construct($_pay_type, $_pay_number){
        $this->pay_type = $_pay_type;
        $this->pay_number = $_pay_number;
    }

    public function setPayType($_pay_type){
        $this->pay_type = $_pay_type;
    }
    public function getPayType(){
        return $this->pay_type;
    }
    
    public function setPayNumber($_pay_number){
        $this->pay_number = $_pay_number;
    }
    public function getPayNumber(){
        return $this->pay_number;
    }
 }

?>