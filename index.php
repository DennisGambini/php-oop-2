<?php
require_once __DIR__.'/classes/Foreign.php';
require_once __DIR__.'/classes/Subscriber.php';

$user_1 = new User('Mario', 'Rossi', 'mario.rossi@gmail.com');
$user_2 = new Subscriber('Mirco', 'Cavalletti', 'mirco.cavalletti@gmail.com');
$user_3 = new Foreign('Giovanna', 'Lori', 'giovanna.lori@gmail.com');

var_dump($user_1, $user_2, $user_3);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP OOP 2</title>
</head>
<body>
    <header>
        <h1>E-Commerce</h1>
    </header>

    <main>

    </main>
</body>
</html>