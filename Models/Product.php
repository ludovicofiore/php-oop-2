<?php

class Product{

    public $name;
    public $description;
    private $price;
    public $category;

    public function __construct(string $_name, string $_description, float $_price, Category $_category){
        $this->name = $_name;
        $this->description = $_description;
        // $this->price = $_price;
        $this->setPrice($_price);
        $this->category = $_category;
    }


    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }
}