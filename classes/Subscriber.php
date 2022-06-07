<?php
require_once __DIR__.'./User.php';

class Subscriber extends User {
    protected $super_treatment = true;

    function __construct($name, $surname, $email){
        parent::__construct($name, $surname, $email);
    }

    use Treatment;
    use Payment;
}


?>