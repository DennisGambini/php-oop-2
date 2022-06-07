<?php
require_once __DIR__.'/../classes/Animal.php';
require_once __DIR__.'/../classes/Food.php';
require_once __DIR__.'/../classes/Game.php';

$prod_1 = new Animal(150, 'un bel cane', 'Fuffi', 'Cane');
$prod_2 = new Food(20, 'crocchette vegane a base di zenzero e guacamole', 'Crocchette Special', 'Cane', 'Whiskas');
$prod_3 = new Game(83, 'Una palla che terrà il vostro animale occupato per un bel po', 'Gatto', 'Palla Magica 5.0', 'Giochi Uniti');
$prod_4 = new Animal(623, 'Bellissimo gatto siamese con occhi viola e pelo trasparente', 'Ettore', 'Gatto');


$prod_1->setImage('https://www.focus.it/images/2022/05/03/cani_1020x680.jpg');
$prod_2->setImage('https://www.petsplanet.it/714-large_default/green-for-dog-crocchette-per-tutti-i-cani-12-kg.jpg');
$prod_3->setImage('https://arcaplanet.vtexassets.com/arquivos/ids/240935/trixie-cane-gioco-palla-gomma-morbida.jpg?v=637454985917900000');
$prod_4->setImage('https://www.zooplus.it/magazine/wp-content/uploads/2020/07/1-32.jpg');

?>