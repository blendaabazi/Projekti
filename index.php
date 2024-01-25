<?php
  session_start();
  include_once 'userRepository.php';
  $hide="";
  if(!isset($_SESSION['username']))
    header("location:LoginForm.php");
  else{
    if($_SESSION['role'] == "admin")
      $hide = "";
    else
      $hide = "hide";
?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore</title>
    <link rel="stylesheet" href="bookStore.css">
</head>
<style>
 .hide{
    display:none; 
   }
</style>
<body>
    <div class="b">
    <header class="headerConatiner">
        <div class="logo">
            <p>BookStore</p>
        </div>
        <div class="div-links">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="dashboard.php" class="<?php echo $hide?>">Dashboard</a></li>
            <li><a href="#">
                <select onchange="location=this.value"  style="background-color:transparent; border: none;">
                <option  value="Category">Category</option>
                <option value="ChildrenBooks.php">Libra per femije</option>
                <option  value="Roman.php">Romane</option>
                <option  value="cookBooks.php">Libra Gatimi</option>
                <option  value="LibraShkencor.php">Libra Shkencor</option>

                </select></a>
            </li>
            <li><a href="ShoppingList.php">Shopping List</a></li>
            <li><a href="LogOut.php" style="background-color: rgb(0, 0, 0); color: white;">LogOut</a></li>
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
            <img style=" width: 100%; height: 540px;" id="slideshow" />
            <button  onclick="changeImg()">Next</button>
    
    </div>
    <div class="photos">
        <div class="rubrika">
            <img src="images/foto2.png" alt="foto2" style="width: 198px; height:280px ;">
            <h2>Libra per femije</h2>
            <p>Cmimi - 3.50$</p>
            <button onclick="addToShoppingList('Libri Per Femije 1', 3.50)">Shto në Shportë</button>
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

  
  <!-- ContactUs -->
    <section id="div_contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" name="contact_form" class="contact_form" id="form" >
              <div class="form_group">
                <div class="form_control">
                  <input type="text" id="name" name='name' placeholder="Name"/>
                  <span class="error" id="nameError"></span>
                </div>
                <div class="form_control">
                  <input type="text" id="email" name='email' placeholder="Email"/>
                  <span class="error" id="emailError"></span>
                </div>
               
            </div>


              <div class="form_control">
                <input type="tel" name="phone" id="phone" name='phone' placeholder="Phone Number" />
                <span class="error" id="phoneError"></span>
              </div>

              <div class="gender_options">
                <label for="male" class="radio_label">Male
                  <input type="radio" name="gender" id="male" value="male" />
                </label>
                <label for="female" class="radio_label" >Female
                  <input type="radio" name="gender" id="female" value="female" />
                </label>
              </div>
              

              <div class="form_control">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message..."></textarea>
              </div>

              <input type="submit" name="contactBtn" id="submit" value="SEND" />

              <div class="success_message" id="success_msg">
              </div>
            </form>
        </div>
    <section>
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
    //Slider
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


<script>
    document.getElementById('form').addEventListener('contactBtn', function(event) {
      event.preventDefault();

      let nameInput = document.getElementById('name');
      let emailInput = document.getElementById('email');
      let phoneInput = document.getElementById('phone');

      let nameError = document.getElementById('nameError');
      let emailError = document.getElementById('emailError');
      let phoneError = document.getElementById('phoneError');
  

      nameError.innerText = '';
      emailError.innerText = '';
      phoneError.innerText = '';
      repeatPwError.innerText = '';

      let nameRegex=/^[A-Z][a-z]{2,20}/;
      let emailRegex =/[a-z0-9.-_]+@+[\sa-z]+\.+[\sa-z]{2,4}$/;
      let phoneRegex = /^\+[0-9]{12}$/;


      if (!nameRegex.test(nameInput.value)) {
        nameError.innerText = 'Invalid input.';
      }

      if (!emailRegex.test(emailInput.value)) {
        emailError.innerText = 'Invalid email input.';
      }
      
      if (!phoneRegex.test(phoneInput.value)) {
        phoneError.innerText = 'Invalid input.';
      }
      
    });
  </script>
</body>
</html>
<?php
  }
  include_once 'userRepository.php';
  include_once 'contact.php';
  
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contactBtn'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $gender = $_POST['gender'];
      $message = $_POST['message'];
  
      if (empty($name) || empty($email) || empty($phone) || empty($gender) || empty($message)) {
          echo "Invalid data. Please check your input.";
      } else {
              $userRepository = new UserRepository();

              $contact = new Contact(null, $name, $email, $phone, $gender, $message);

              $userRepository->insertContact($contact);
  
              echo "Contact information has been inserted successfully!";
      }
  }
  ?>
  
?>

