<?php
require_once __DIR__.'/../classes/Animal.php';
require_once __DIR__.'/../classes/Food.php';
require_once __DIR__.'/../classes/Game.php';

$prod_1 = new Animal(150, 'un bel cane', 'Fuffi');
$prod_2 = new Food(150, 'crocchette vegane', 'Cane', 'Whiskas');
$prod_3 = new Game(150, 'Una palla che terrà il vostro animale occupato per un bel po', 'Gatto', 'Palla Magica 5.0', 'Giochi Uniti');

?>