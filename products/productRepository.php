<?php

class ProductRepository
{
    
    function getAllProducts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM product";

        $statement = $conn->query($sql);
        $products = $statement->fetchAll();

        return $products;
    }
  
    function insertProduct($product){
        $conn = $this->connection;

        $id = $product->getId();
        $title = $product->getTitle();
        $price = $product->getPrice();
        $imagePath = $product->getImagePath();
        
       

        $sql = "INSERT INTO product (id,title,price,imagePath) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$title,$price,$imagePath]);

    }

    function updateProduct($id,$title,$price,$imagePath){
        $conn = $this->connection;

        $sql = "UPDATE product SET title=?, price=?, imagePath=? WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$title,$price,$imagePath,$id]);

        echo "<script>alert('update was successful'); </script>";
   }

   function deleteProduct($id){
       $conn = $this->connection;

       $sql = "DELETE FROM product WHERE id=?";

       $statement = $conn->prepare($sql);

       $statement->execute([$id]);

       echo "<script>alert('delete was successful'); </script>";
   }
 
}

?>
