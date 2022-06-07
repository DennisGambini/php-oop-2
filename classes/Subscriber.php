<?php
require_once __DIR__.'./User.php';

class Subscriber extends User {
    private $super_treatment = true;

    use Treatment;
}


?>