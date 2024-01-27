<?php
class ProductsPr {
    private $id;
    private $name;
    private $price;
    private $description;
    private $photograph;

    function __construct($id, $name, $price, $description, $photograph) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->photograph = $photograph;
    }

    function getId(){
        return $this->id;
    }

    function getName(){
        return $this->name;
    }

    function getPrice(){
        return $this->price;
    }

    function getDescription(){
        return $this->description;
    }

    function getPhotograph(){
        return $this->photograph;
    }
}
?>