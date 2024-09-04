<?php

class CatProduct extends Product {

    public $type;

    public function __construct(string $_name, string $_description, float $_price, string $_type){

        parent::__construct($_name, $_description, $_price);

        $this->type = $_type;
    }
}