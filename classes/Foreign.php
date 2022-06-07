<?php
require_once __DIR__.'./User.php';

class Foreign extends User {
    protected $super_treatment = false;
    

    function __construct($name, $surname, $email){
        parent::__construct($name, $surname, $email);
    }

    use Treatment;
    use Payment;
}


?>