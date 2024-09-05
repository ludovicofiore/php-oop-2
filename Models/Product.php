<?php

class Product{

    protected $name;
    public $description;
    protected $price;
    public $category;

    public function __construct(string $_name, string $_description, $_price, Category $_category){
        $this->setName($_name);
        $this->description = $_description;
        // $this->price = $_price;
        $this->setPrice($_price);
        $this->category = $_category;
    }

    // funzioni prezzo
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

    // funzioni nome
    public function getName(){
        return $this->name; 
    }

    public function setName($name){
        // controllo errore
        if(empty($name) || strlen($name) <3){
            throw new Exception('Il nome deve avere almeno 3 caratteri');
        }

        $this->name = $name;
    }

    
}