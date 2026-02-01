<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Dashboard</title>
</head>
<body>
     <h2>Products</h2>
     <a href="addProduct.php">Add Product</a>
     
     <table border="1">
         <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>DESCRIPTION</th>
            <th>QUANTITY</th>
            <th>PRICE</th>
            <th>Edit</th>
            <th>Delete</th>

         </tr>
<?php
     //duhet ti shfaqim produktet nga databaza ne tabele
     include_once '../repository/productRepository.php';

     $productRepo = new ProductRepository();
     $products = $productRepo -> getAllProducts();


     foreach ($products as $product){
        echo"
        <tr>
        <td>{$product['id']}</td>
        <td>{$product['name']}</td>
        <td>{$product['description']}</td>
        <td>{$product['quantity']}</td>
        <td>{$product['price']}</td>
        <td><a href='editProduction.php?id={$product['id']}'>Edit</a></td>
        <td><a href='deleteProduct.php?id?={$product['id']}'>Delete</a></td>
        </tr>
        "
     }
?>


     </table>
</body>
</html>