<?php
require_once __DIR__.'/data/users_data.php';
require_once __DIR__.'/data/products_data.php';

$users = [$user_1, $user_2, $user_3, $user_4, $user_5];
// var_dump($users);

$products = [$prod_1, $prod_2, $prod_3, $prod_4];
// var_dump($products);

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
        <h1>Il Paradiso Del Bestiame</h1>
    </header>

    <main>
        <section id="users">
            <?php foreach($users as $user){ ?>

                <div class="user">
                    <h2>
                        <?php echo "{$user->getName()} {$user->getSurname()}"; ?>
                    </h2>
                    <p>
                        <?php echo "E-mail : {$user->getEmail()}" ?>
                    </p>
                    <p>
                        <?php echo $user->getTreatment() ? 'Iscritto' : 'Non iscritto' ?>
                    </p>
                    <p>
                        <?php echo "{$user->getPayType()} : {$user->getPayNumber()}" ?>
                    </p>
                    <p>
                        <?php echo "Sconto : {$user->getDiscount()}".' %' ?>
                    </p>
                </div>
            
            <?php } ?>
        </section>

        <section id="products">
            <?php foreach ($products as $prod){ ?>

                <div class="product">

                    <h2>
                        <?php if(is_a($prod, 'Animal') || is_a($prod, 'Food')){
                            echo "Nome : {$prod->getName()}";
                        } elseif (is_a($prod, 'Game')){
                            echo "Gioco : {$prod->getModel()}";
                        } ?>
                    </h2>
                    
                    <div class="immagine">
                        <img src="<?php echo $prod->getImage() ?>" alt="immagine prodotto">
                    </div>

                    <p> <?php echo "Prezzo : {$prod->getPrice()}".' &euro;' ?> </p>
                    
                    <p> <?php echo "descrizione : {$prod->getDescription()}" ?> </p>


                </div>
            

            <?php } ?>
        </section>
    </main>
</body>
</html>