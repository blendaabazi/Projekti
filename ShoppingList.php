<?php
session_start();
include_once 'userRepository.php';

// Kontrollo nese perdoruesi eshte i kyqur
if (!isset($_SESSION['username'])) {
    header("location:LoginForm.php");
    exit();
}

// Kontrollo rolin e perdoruesit
$hide = "";
if ($_SESSION['role'] != "admin") {
    $hide = "hide";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping List</title>
   
</head>
<style>
  /* Resetimi i disa stilizimeve bazike */
body, h1, h2, h3, ul, p {
    margin: 0;
    padding: 0;
}

/* Stilizimi i fundit */
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
}

.b {
    width: auto;
    margin: 0 auto;
    background-color: white;
    border: 1px solid #ddd;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    overflow: hidden;
 
}

.headerConatiner {
    background-color: #333;
    color: white;
    padding: 10px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 24px;
    font-weight: bold;
}

.div-links ul {
    list-style: none;
    display: flex;
}

.div-links ul li {
    margin-right: 15px;
}

.div-links a {
    text-decoration: none;
    color: white;
}

.slogan {
    text-align: center;
    padding: 30px 0;
}

#shoppingListContainer {
    margin: 20px;
}

#shoppingListContainer p {
    font-size: 18px;
    color: #555;
}

#shoppingListContainer ul {
    list-style: none;
}

#shoppingListContainer ul li {
    margin-bottom: 10px;
    padding: 5px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.footerContent {
    background-color: #333;
    color: white;
    padding: 10px 0;
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
}
.hide{
    display:none; 
   }
</style>
<body >
    <div class="b">
        <header class="headerConatiner">
            <div class="logo">
                <p>BookStore</p>
            </div>
            <div class="div-links">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="dashboard.php" class="<?php echo $hide ?>">Dashboard</a></li>
                   
                    <li><a href="LogOut.php" style="background-color: rgb(0, 0, 0); color: white;">LogOut</a></li>
                </ul>
            </div>
        </header>
        <hr style="color: white;">




        <!-- Shfaqja e listes se librave ne shporte -->
        <main class="slogan">
            <h3>Your Shopping List</h3>
            <div id="shoppingListContainer">
                <?php
                if (empty($shoppingList)) {
                    echo "<p>Your shopping list is empty.</p>";
                } else {
                    echo "<ul>";
                    foreach ($shoppingList as $item) {
                        echo "<li>{$item['title']} - $ {$item['price']}</li>";
                    }
                    echo "</ul>";
                }
                ?>
            </div>
        </main>
    </div>

    <footer class="footerContent">
        <!-- Footeri i faqes -->
    </footer>

</body>

</html>
