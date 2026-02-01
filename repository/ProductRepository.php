<?php
include_once '../interface/IProductRepository.php';
include_once '../databaseConnection/databaseConnection.php';

class ProductRepository implements IProductRepository
{
      private $connection;

      function _construct()
      {
        $conn = new DatabaseConnection;
      }

      //add product
      public function insertProduct($product){
         $con = $this->connection;

         $sql = "INSERT INTO product (name,description,quantity,price)
                  VALUES (?,?,?,?)";

             //ID ESHTE AUTO INCREMENT

          $statement = $conn->prepare($sql);
          $statement->execute([
            $product -> getName();
            $product -> getDescription();
            $product -> getQuantity();
            $product -> getPrice();
          ])
          

      }


      public function getAllProducts(){
        $sql = "SELECT * FROM product";
        return $this -> connection -> query($sql) -> fetch All();
      }

      //get by id
      public function getProductById($id){
        $sql = "SELECT * FROM product WHERE id=?";
        $statement = $this -> connection -> prepare($sql);
        $statement->execute([$id]);
        return $statement -> fetch();
      }


      //edit 
      public function updateProduct($id, $name, $description, $quantity,$price);
      {
        $sql = "UPDATE product
                  SET name =?, description=?,quantity=?, price=?
                  WHERE id=?";
        $statement = $this->connection -> prepare($sql);
        $statement ->execute([$id, $name, $description, $quantity,$price]);
    }
    //delete by id 
    public function deleteProduct($id)
    {
        $sql = "DELETE FROM product WHERE id=?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$id]);
    }
}

?>