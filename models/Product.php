<?php
   class Product
   {
    private $id;
    private $name;
    private $description;
    private $quantity;
    private $price;

    function_construct($id,$name,$description,$quantity,$price){
        $this->id = $id;
        $this->name=$name;
        $this->description = $description;
        $this->quantity = $quantity;
        
    }
   }

?>