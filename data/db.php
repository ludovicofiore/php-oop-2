<?php
require_once __DIR__ . '/../Models/Product.php';


$products = [
    new CatProduct('crocchette', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ducimus totam sed voluptate', 10.00, 'gatto'),
    new DogProduct('gioco osso', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ducimus totam sed voluptate', 5.00, 'cane'),
    new DogProduct('cuccia da esterno', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ducimus totam sed voluptate', 50.00, 'cane')
];