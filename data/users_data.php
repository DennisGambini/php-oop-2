<?php
require_once __DIR__.'/../classes/Foreign.php';
require_once __DIR__.'/../classes/Subscriber.php';

$user_1 = new Subscriber('Mirco', 'Cavalletti', 'mirco.cavalletti@gmail.com');
$user_2 = new Foreign('Giovanna', 'Lori', 'giovanna.lori@gmail.com');
$user_3 = new Foreign('Dennis', 'Gambini', 'fffffffff.gggggg@kjsdhkhss');
$user_4 = new Subscriber('Luca', 'Bianchi', 'mail.mail@mail.mail');
$user_5 = new Foreign('Paolo', 'Santullo', 'paolo.santullo@libero.it');


$user_1->setPayType('credit card');
$user_1->setPayNumber('0320549957685431');

$user_2->setPayType('debit card');
$user_2->setPayNumber('IT022 000FF 8584587 II02146');

$user_3->setPayType('debit card');
$user_3->setPayNumber('FR022 666FF 85df557 TYj56589');

$user_4->setPayType('credit card');
$user_4->setPayNumber('67567576624945466');

$user_5->setPayType('credit card');
$user_5->setPayNumber('4533263752782787');

?>