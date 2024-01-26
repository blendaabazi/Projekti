
<?php
$productId = $_GET['id'];
include_once '../products/productRepository.php';

$productRepository = new ProductRepository();

$product  = $productRepository->getProductById($productId);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
      body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    text-align: center;
}

.btn-container {
    background-color: #444;
    padding: 10px;
    color: white;
    display: flex;
    justify-content: space-between;
}

.btn-container a {
    text-decoration: none;
    color: white;
    margin-right: 10px;
    padding: 8px;
    /* border: 1px solid white;
    border-radius: 5px; */
    display: inline-block;
    transition: background-color 0.3s;
}

.btn-container a:hover {
    background-color: white;
    color: #007bff;
}

h3 {
    color: #333;
}

form {
    max-width: 400px;
    margin: 20px auto;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    transition: box-shadow 0.3s ease-in-out;
}

form:hover {
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
}

input {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
    border: none;
    border-radius: 5px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

.icon {
    display: inline-block;
    margin-right: 8px;
    font-size: 16px;
}
    </style>
<body>
<div class="btn-container">
        <a href="../pages/index.php" class="icon">Home</a>
        <a href="../login/LogOut.php" class="icon">Logout</a>
    </div>

    <form action="" method="post">
        <input type="text" name="id"  value="<?=$product['id']?>" readonly> <br> <br>
        <input type="text" name='title'  value="<?=$product['title']?>"> <br> <br>
        <input type="text" name='price'  value="<?=$product['price']?>"> <br> <br>
        <input type="text" name="imagePath"  value="<?=$product['imagePath']?>"> <br> <br>
    
        <input type="submit" name="editBtn" value="Save"> <br> <br>
    </form>
</body>
</html>

<?php 

include_once '../products/productRepository.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $productRepository = new ProductRepository();
    $product = $productRepository->getProductById($id);

    // Nese produkti nuk gjendet, mund te beni nje trajtim te tjeter si shfaqjen e nje mesazhi te gabimit.
    if (!$product) {
        echo "Produkti nuk u gjet!";
        exit();
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Përpunoni të dhënat e POST-uar pasi të jenë paraqitur nga forma e editimit.
    $id = $_POST['id'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $imagePath = $_POST['imagePath'];

    $productRepository = new ProductRepository();
    $productRepository->updateProduct($id, $title, $price, $imagePath);

    // Pasi të dhënat janë edituar, ridrejto në faqen kryesore ose ku deshironi.
    header("Location: ../admin/dashboard.php");
    exit();
} else {
    // Nëse nuk ka ndonjë parameter 'id' dhe nuk është bërë një POST request, kthehu në faqen kryesore ose ku deshironi.
    header("Location: ../admin/dashboard.php");
    exit();
}

?>