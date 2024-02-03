<?php

include_once __DIR__ . '/Models/Category.php';
include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Kennel.php';
include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Toy.php';

$catsCategory = new Category('Cats', 'Products for cats', 'c:\Users\39345\AppData\Local\Temp\cat8600.jpg');
$dogsCategory = new Category('Dogs', 'Products for dogs', 'c:\Users\39345\AppData\Local\Temp\dog.svg');

$chickenNuggets = new Product('Cat Food', 'Chicken Nuggets', "Chicken nuggets for your special companion!", 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fheadsupfortails.com%2Fproducts%2Fwhiskas-ocean-fish-dry-food-for-adult-cats-available-in-multiple-sizes&psig=AOvVaw3IhilC8syCu5eJDlSsGI1M&ust=1707058668138000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCMiKl6C3j4QDFQAAAAAdAAAAABAD', 3.70 , 'Available', '3');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Pet Shop</title>
</head>

<body>
    <header>
        <img class="main-logo" src="./assets/il_570xN.2161539293_ltlo.avif" alt="Pet Shop Main Logo">
    </header>
    <main>
        <div class="row">
        <?php foreach ($products as $product) {?>
            <div class="container">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $product->name ?>
                        </h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </main>
</body>

</html>