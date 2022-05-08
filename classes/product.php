<?php
class Product{
    private $name;
    private $price;

    public function __construct($_name, $_price){
        $this->name = $_name;
        $this->price = $_price;
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }
    
}
class Toy extends Product{
    private $brand;
    private $dimensions;

    public function __construct($_name, $_brand, $_price){
        parent::__construct($_name, $_price);
        $this->brand = $_brand;
    }
    
    public function getBrand(){
        return $this->brand;
    }
}
