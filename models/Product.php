<?php
   class Product
   {
    private $id;
    private $name;
    private $description;
    private $quantity;
    private $price;
    private $image;
   
    //konstruktori
    function _construct($id,$name,$description,$quantity,$price,$image){
        $this->id = $id;
        $this->name=$name;
        $this->description = $description;
        $this->quantity = $quantity;
        $this->price = $price;
    }
      //getters
      function getId(){
         return $this->id;
      }

      function getName(){
         return $this->name;
      }

      function getDescription(){
        return $this->description;
      }

      function getQuanity(){
         return $this->quantity;
      }

      function getPrice(){
        return $this->price;
      }

      function getImage(){
        return $this->image;
      }
       
      //setters ...
   }

?>