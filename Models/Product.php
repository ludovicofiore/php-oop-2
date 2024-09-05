<?php

class Product{

    public $name;
    public $description;
    protected $price;
    public $category;

    public function __construct(string $_name, string $_description, $_price, Category $_category){
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
        // controllo errore
        if(!is_numeric($price)){
            throw new Exception ('Il prezzo deve essere un numero');
        }

        $this->price = $price;

        
    }

    
}