<?php
require_once __DIR__ . '/../Models/Product.php';


$products = [
    new CatProduct('crocchette', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ducimus totam sed voluptate', 'ciao', new Category('cibo'), 'gatto'),
    new DogProduct('gioco osso', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ducimus totam sed voluptate', 5.00, new Category('giochi'), 'cane'),
    new DogProduct('cuccia da esterno', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ducimus totam sed voluptate', 50.00, new Category('cucce'), 'cane')
];