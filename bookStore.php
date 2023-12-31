<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore</title>
    <link rel="stylesheet" href="bookStore.css">
</head>
<body>
    <div class="b">
    <header class="headerConatiner">
        <div class="logo">
            <p>BookStore</p>
        </div>
        <div class="div-links">
        <ul>
            <li><a href="bookStore.html">Home</a></li>
            <li><a href="#">
                <select onchange="location=this.value"  style="background-color:transparent; border: none;">
                <option  value="Category">Category</option>
                <option value="ChildrenBooks.html">Libra per femije</option>
                <option  value="Roman.html">Romane</option>
                <option  value="cookBooks.html">Libra Gatimi</option>
                <option  value="LibraShkencor.html">Libra Shkencor</option>

                </select></a>
            </li>
            <li><a href="#">Shopping List</a></li>
            <li><a href="LoginForm.html" style="background-color: rgb(0, 0, 0); color: white;">Login</a></li>
        </ul>
    </div>
    </header>
    <hr style="color: white;">
    <main class="slogan">
        <h2>Open a book,<br> open your mind.</h2>
        <div class="bgPhoto">
            <button style="background-color: rgb(0, 0, 0); color: white;"><a href="#">Shop Now</a></button>
        </div>
    </main> 
    </div>

    <div  id="slider" style="background-color: #dcdde4;">
             <!-- style="background-color: #b4d4d0; -->
            <img style=" width: 100%; height: 600px;" id="slideshow" />
            <button  onclick="changeImg()">Next</button>
    
    </div>
    <div class="photos">
        <div class="rubrika">
            <img src="images/foto2.png" alt="foto2" style="width: 198px; height:280px ;">
            <h2>Libra per femije</h2>
            <p>Cmimi - 3.50$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto6.png" alt="foto6" style="width: 198px;">
            <h2>Libra per femije</h2>
            <p>Cmimi - 2.50$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto7.png" alt="foto7" style="width: 198px; height:280px ;">
            <h2>Libra per femije</h2>
            <p>Cmimi - 3.00$</p>
            <button>Shto në shportë</button>
            
        </div>
        <div class="rubrika">
            <img src="images/foto9.png" alt="foto9" style="width: 198px; height:280px">
            <h2>Libra per femije</h2>
            <p>Cmimi - 4.00$</p>
            <button>Shto në shportë</button>

        </div>
        
        <div class="rubrika">
            <img src="images/foto38.png" alt="foto38">
            <h2>Romane</h2>
            <p>Cmimi - 12.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto35.png" alt="foto35">
            <h2>Romane</h2>
            <p>Cmimi - 4.80$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto36.png" alt="foto36">
            <h2>Romane</h2>
            <p>Cmimi - 5.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto37.png" alt="foto37">
            <h2>Romane</h2>
            <p>Cmimi - 10.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto22.png" alt="foto22" >
            <h2>Libra shkencor</h2>
            <p>Cmimi - 15.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto23.png" alt="foto23">
            <h2>Libra shkencor</h2>
            <p>Cmimi - 28.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto24.png" alt="foto24">
            <h2>Libra shkencor</h2>
            <p>Cmimi - 33.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto25.png" alt="foto25">
            <h2>Libra shkencor</h2>
            <p>Cmimi - 40.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto17.png" alt="foto17" style="width: 198px; height:250px">
            <h2>Libra gatimi</h2>
            <p>Cmimi - 4.90$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto18.png" alt="foto18" style="width: 198px; height:250px">
            <h2>Libra gatimi</h2>
            <p>Cmimi - 6.80$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="images/foto19.png" alt="foto19" style="width: 198px; height:250px">
            <h2>Libra gatimi</h2>
            <p>Cmimi - 5.00$</p>
            <button>Shto në shportë</button>
        </div>
        
        <div class="rubrika">
            <img src="images/foto60.png" alt="foto60" style="width: 198px; height:250px">
            <h2>Libra gatimi</h2>
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
    let i=0;
    var imgArray = ["images/img-02.png","images/img-01.png","images/img-03.png"];
    function changeImg(){
        document.getElementById('slideshow').src=imgArray[i];
        if(i<imgArray.length-1){
            i++;
        }
        else{
            i=0;
        }
    }
    document.body.addEventListener('load',changeImg());
</script>
</body>
</html>