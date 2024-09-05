<?php 
require_once __DIR__ . '/Models/Product.php';
// require_once __DIR__ . '/Models/AnimalType.php';
require_once __DIR__ . '/Models/DogProduct.php';
require_once __DIR__ . '/Models/CatProduct.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/data/db.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercizio oop ecommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
<div class="container d-flex justify-content-between mt-5">

    <?php foreach($products as $product): ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">

                <h5 class="card-title"><?php echo $product->name ?></h5>

                <h6 class="card-subtitle mb-2 text-muted"> <?php echo $product->getPrice() ?> euro</h6>

                <p class="card-text"> <?php echo $product->description ?></p>

                <h6> <?php echo $product->type ?> </h6>

                <h6> Categoria: <?php echo $product->category->name ?> </h6>
            </div>
        </div>
    <?php endforeach; ?>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>