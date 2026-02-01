<?php

class User{
    private $conn;
    private $table_name='useri';

    public function __construct($db){
        $this->conn=$db;
  
    }

    public function signup($name,$surname,$email,$password):bool{
        $query="INSERT INTO {$this->table_name} (name,surname,email,password) VALUES (:name, :surname, :email, :password)";
        $stmt = $this->conn->prepare ($query);

        $stmt->bindParam(':name',$name);
        $stmt->bindParam(':surname',$surname);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam('password', password_hash(password: $password ,algo:PASSWORD_DEFAULT));

        if($stmt->execute()){
            return true;
        }
        return false;


    }

    public function loginform($email,$password):bool{
        $query="SELECT id,name,surname,email,password FROM {$this->table_name} WHERE email=:email";
        $stmt = $this->conn->prepare ($query);

        $stmt->bindParam(':email',$email);
        $stmt->execute();

        if($stmt->rowCount() > 0){
           $row=$stmt->fetch(PDO:: FETCH_ASSOC);
           if(password_verify(password: $password,hash: $row['password'])){
            session_start();
            $_SESSION['user_id']=$row['id'];
            $_SESSION['email']=$row['email'];

            return true;
           }

        }
        return false;
        


    }

    public function forgot($email, $new_password){

    $query = "SELECT id FROM {$this->table_name} WHERE email = :email LIMIT 1";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
        return false;
    }

    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    $update = "UPDATE {$this->table_name} SET password = :password WHERE id = :id";
    $stmt = $this->conn->prepare($update);
    $stmt->bindParam(':password', $hashed_password);
    $stmt->bindParam(':id', $user['id']);
    $stmt->execute();

    return true;
}



}




?>