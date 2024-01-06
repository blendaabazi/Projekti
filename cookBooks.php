<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore</title>
    <link rel="stylesheet" href="bookStore.css">
</head>
<body>
    <div class="b" style="height: 400px;">
    <header class="headerConatiner">
        <div class="logo">
            <p>BookStore</p>
        </div>
        <div class="div-links">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">
                <select onchange="location=this.value" style="background-color:transparent; border: none;">
                <option  value="">Category</option>
                <option value="ChildrenBooks.php">Libra per femije</option>
                <option  value="Roman.php">Romane</option>
                <option  value="cookBooks.php">Libra Gatimi</option>
                <option  value="LibraShkencor.php">Libra Shkencor</option>

                </select></a>
            </li>
            <li><a href="#">Shopping List</a></li>
            <li><a href="LoginForm.php">Login</a></li>
        </ul>
    </div>
    </header>
    <hr style="color: white;">
    <main class="slogan">
        <h2>Libra Gatimi</h2>
        <p>Ketu mund te gjeni ...</p>
    </main> 
    </div>
    <div class="photos">
        <div class="rubrika">
            <img src="images/foto67.png" alt="foto67">
            <p style="font-weight: bold;">Kuzhina Shqiptare</p>
            <p>Cmimi - 3.50$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto57.png" alt="foto57" style="width: 194px;">
            <p style="font-weight: bold;">Dieta Vegjetariane</p>
            <p>Cmimi - 2.50$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto19.png" alt="foto19" style="width: 190px; height:280px ;">
            <p style="font-weight: bold;">Kuzhina e shpejte</p>
            <p>Cmimi - 3.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto68.png" alt="foto68" style="width: 190px; height:280px">
            <p style="font-weight: bold;">Si te gatuajme</p>
            <p>Cmimi - 4.00$</p>
            <button>Shto në shportë</button>
        </div>
        
        <div class="rubrika">
            <img src="images/foto69.png" alt="foto69">
            <p style="font-weight: bold;">Receta Gatimi - Spageti</p>
            <p>Cmimi - 12.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto70.png" alt="foto70">
            <p style="font-weight: bold;">Magjia e gatimit</p>
            <p>Cmimi - 4.80$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto71.png" alt="foto71">
            <p style="font-weight: bold;">Receta gatimi - rizoto</p>
            <p>Cmimi - 5.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto73.png" alt="foto73">
            <p style="font-weight: bold;">Receta gatimi - supe</p>
            <p>Cmimi - 10.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto72.png" alt="foto72*" >
            <p style="font-weight: bold;">Gatimi sot</p>
            <p>Cmimi - 15.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto74.png" alt="foto74">
            <p style="font-weight: bold;">Embelsira dhe Brumera</p>
            <p>Cmimi - 28.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto55.png" alt="foto55">
            <p style="font-weight: bold;">Kuzhina e shpejte</p>
            <p>Cmimi - 33.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto56.png" alt="foto56">
            <p style="font-weight: bold;">Shija e Tradites</p>
            <p>Cmimi - 40.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto18.png" alt="foto18" style="width: 190px; height:250px">
            <p style="font-weight: bold;">Kuzhina Italiane</p>
            <p>Cmimi - 4.90$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto58.png" alt="foto58" style="width: 190px; height:250px">
            <p style="font-weight: bold;">Pasta</p>
            <p>Cmimi - 6.80$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto59.png" alt="foto59" style="width: 190px; height:250px">
            <p style="font-weight: bold;">Mish</p>
            <p>Cmimi - 5.00$</p>
            <button>Shto në shportë</button>
        </div>
        
        <div class="rubrika">
            <img src="images/foto60.png" alt="foto60" style="width: 190px; height:250px">
            <p style="font-weight: bold;">Buke</p>
            <p>Cmimi - 10.00$</p>
            <button>Shto në shportë</button>
        </div>
    </div>
    <footer class="footerContent">
        <div class="footerStart">
            <h2>Rreth nesh</h2>
            <h2>Kontakti</h2>
            <h2>Rrjetet tona sociale</h2>
        </div>
        <div class="footerMain">
        <div class="footerLeft">
            <p>BookStore eshte nje dyqan online ku ju mund te zgjedhni libra te kategorive te ndryshme.<br>Eshte krijuar qe nga viti 2015</p>
        </div>
        <div class="footerCenter">
            <p>Mund te na kontaktoni ne email-in tone zyrtar <br>Email: <a href="">bookStore@gmail.com</a></p>
        </div>
        <div class="footerRight">
            <div class="links">
                <a href=""><img src="images/facebook.png" alt="facebook"  width="32px" height="32px"></a>
                <a href=""><img src="images/instagram.png" alt="instagram"  width="32px" height="32px"></a>
                <a href=""><img src="images/twitter.png" alt="twitter"  width="32px" height="32px"></a>
            </div>
        </div>
        </div>
        <div class="footerEnd">
            <p><em><b>Copyright 2023 BookStore. All rights reserved.</em></b></p>
        </div>
    </footer>
</div>
<script>
   
</script>
</body>
</html>