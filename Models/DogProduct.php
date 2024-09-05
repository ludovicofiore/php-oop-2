<?php

class DogProduct extends Product {

    public $type;

    public function __construct(string $_name, string $_description, $_price,  Category $_category, string $_type){

        parent::__construct($_name, $_description, $_price, $_category);

        $this->type = $_type;
    }
}