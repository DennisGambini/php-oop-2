<?php
require_once __DIR__.'./User.php';

class Foreign extends User {
    private $super_treatment = false;

    use Treatment;
}


?>