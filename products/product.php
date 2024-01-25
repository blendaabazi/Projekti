<?php

class Product{
    private $id;
    private $title;
    private $price;
    private $imagePath;
    

    function __construct($id,$title,$price,$imagePath){
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->imagePath = $imagePath;
        
    }

    function getId(){
        return $this->id;
    }
    function getTitle(){
        return $this->title;
    }
    function getPrice(){
        return $this->price;
    }
    function getImagePath(){
        return $this->imagePath;
    }
   
}

?>