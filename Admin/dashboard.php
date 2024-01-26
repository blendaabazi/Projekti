<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <style>

        /* Pjesa  e css per dashboard */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #444;
            padding: 10px;
        }

        nav a {
            text-decoration: none;
            color: white;
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
        #section__a{
        margin: 100px auto;
        }
        #section__b{
        margin: 100px auto;
        }


        /* product */
        #section__c {
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #section__c label {
            display: block;
            margin-bottom: 10px;
        }

        #section__c input {
             width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        #section__c input[type="submit"]:hover {
             background-color: #0056b3;
        }
        #section__c input[type="submit"] {
            background-color: #333;
            color:white;
        }

    </style>

</head>
<body>
    <header>
        <h1>BookStore</h1>
    </header>
    
    <nav>
        <a href="../pages/index.php">Home</a>
        <a href="#section__b">Contacts</a>
        <a href="#section__d">Products</a>
        <a href="#section__a">Users</a>
    </nav>


   <!-- Userat -->
    <section id="section__a">
        <h3><b>Users</b></h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>USERNAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>ROLE</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
  
        <?php 
        include_once '../user/userRepository.php';

        $userRepository = new UserRepository();

        $users = $userRepository->getAllUsers();

        foreach($users as $user){
            echo 
            "
            <tr>
                <td>$user[id]</td>
                <td>$user[name]</td>
                <td>$user[username] </td>
                <td>$user[email] </td>
                <td>$user[password] </td>
                <td>$user[role] </td>
                <td><a href='../admin/edit.php?id=$user[id]'>Edit</a> </td>
                <td><a href='../admin/delete.php?id=$user[id]'>Delete</a></td>
            </tr>
            ";
        }
        ?>
    </table>
    </section>



    <!-- Contacts from Users -->
    <section id="section__b">
        <h3><b>Contacts</b></h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Gender</th>
            <th>Message</th>
        </tr>
  
        <?php 
        include_once '../user/userRepository.php';

        $userRepository = new UserRepository();

        $contacts = $userRepository->getAllContacts();

        foreach($contacts as $contact){
            echo 
            "
            <tr>
                <td>$contact[id]</td>
                <td>$contact[name]</td>
                <td>$contact[email] </td>
                <td>$contact[phone] </td>
                <td>$contact[gender] </td>
                <td>$contact[message] </td>
            </tr>
            ";
        }
        ?>
    </table>
    </section>
    <?php
        include_once '../products/productRepository.php';

        $productRepository = new ProductRepository();
        $products = $productRepository->getAllProducts();


    ?>

    

    <!-- Products List -->
    <section id="section__d">
    <h3><b>Products List</b></h3>
     <a href="#section__c" style="color:black;">Add a book</a>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Price</th>
                <th>Image Path</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['title']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td><?php echo $product['imagePath']; ?></td>
                    <td><a href="../products/edit.php?id=<?php echo $product['id']; ?>">Edit</a></td>
                    <td><a href="../products/delete.php?id=<?php echo $product['id']; ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
        </section>





        <!-- Shto Produkte -->
        <section id="section__c">
        <h3><b>Products</b></h3>

         <form action="../pages/index.php" method="POST">
            <label for="title">Id:</label>
            <input type="text" name="id" required><br> 

            <label for="title">Title:</label>
            <input type="text" name="title" required><br>

            <label for="price">Price:</label>
            <input type="text" name="price" required><br>

            <label for="imagePath">Image Path:</label>
            <input type="text" name="imagePath" required><br>

            <input type="submit" name="addBookBtn" value="Add Book">
        </form>
        </section>





</body>
</html>

