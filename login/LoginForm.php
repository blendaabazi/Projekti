<?php
    session_start();
    include_once '../bookstoreDB/databaseConnection.php';
    if($_SESSION){
        header("location:../pages/index.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="../login/LoginForm.css">
</head>
<body>
    <div class="container" style="background: url(../images/bgPhoto.png);background-position: center;background-repeat: no-repeat; background-size: cover;">
        <div class="box loginbox">


        <!-- Login Form -->
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <!-- <form action="LoginForm.php" method="post"> -->
            <div class="detais dtsignin">
                <h2>Login</h2>
                <div class="box-wraper">
                    <input type="text" placeholder="Username" id="username" name="username">
                    <label for="">Username</label>
                    <div class="error-message" id="usernameError"></div>
                </div>
                <div class="box-wraper">
                    <input type="password" placeholder="Password" id="password" name="password">
                    <label for="">Password</label>
                    <div class="error-message" id="passwordError"></div>
                </div>
                
                <button id="btnlgn" name="loginBtn" onclick="func1()">Login</button>
                <p>Don't have account?<a href="#" id="link_rg" >Register</a></p>
            </div>
            </form>
        
       
        <div class="singupbox" >


        <!-- Register Form -->
         <form action="../login/LoginForm.php" method="post">
            <div class="detais dtsignup">
                <h2>Register</h2>
                <div class="box-wraper">
                    <input type="text" placeholder="Name" id="name" name="name">
                    <label for="">Name</label>
                    <div class="error-message" id="nameError"></div>
                </div>
                <div class="box-wraper">
                    <input type="text" placeholder="Username" id="uname" name="username"> 
                    <label for="">Username</label>
                    <div class="error-message" id="uError"></div>
                </div>
                <div class="box-wraper">
                    <input type="email" placeholder="Email" id="email" name="email">
                    <label for="">Email</label>
                    <div class="error-message" id="emailError"></div>
                </div>
                <div class="box-wraper">
                    <input type="password" placeholder="Password" id="pass" name="password">
                    <label for="">Password</label>
                    <div class="error-message" id="passError"></div>
                </div>
    
                <button id="btnrg" name="registerBtn" onclick="func2()">Register</button>
                <p>Already have account?<a href="#" id="link_lg">Login</a></p>

            
            </div>
            </form>
        </div>
    </div>
    <?php
        include_once '../login/registerController.php';
        require_once '../login/LoginValidate.php';
       
    ?>
</body>
 <script>
    let detlg = document.querySelector(".dtsignin");
    let detrg = document.querySelector(".dtsignup");

    let linkrg = document.querySelector("#link_rg");
    let linklg = document.querySelector("#link_lg");
    // Funksioni per zhvendosje
    function callsign(){
        detlg.classList.toggle("callreg");
        detrg.classList.toggle("setreg");
    }

    linkrg.addEventListener("click",callsign);
    linklg.addEventListener("click",callsign);





    // Validimi i Login dhe Register
    let usernameRegex = /[a-z0-9.-_]{5,15}$/;
    let passwordRegex = /^[a-z.-_]+[0-9]{3}$/;
    let nameRegex=/^[a-z]{2,20}/;
    let emailRegex =/[a-z0-9.-_]+@+[\sa-z]+\.+[\sa-z]{2,4}$/;

    function func1(){

        let usernameInput = document.getElementById('username');
        let usernameError = document.getElementById('usernameError');
        let passwordInput = document.getElementById('password');
        let passwordError = document.getElementById('passwordError');
        
        usernameError.innerText = '';
        passwordError.innerText = '';

        if(usernameRegex.test(usernameInput.value) === false){
        usernameError.innerText = 'Invalid input!';
        return;
       }
       if(passwordRegex.test(passwordInput.value) === false){
        passwordError.innerText = 'Invalid input!';
        return;
       }

     
    }

    function func2(){
        let nameInput = document.getElementById('name');
        let nameError = document.getElementById('nameError');

        let usernameInput = document.getElementById('uname');
        let usernameError = document.getElementById('uError');

        let emailInput = document.getElementById('email');
        let emailError = document.getElementById('emailError');

        let passwordInput = document.getElementById('pass');
        let passwordError = document.getElementById('passError');

        nameError.innerText = '';
        usernameError.innerText = '';
        emailError.innerText = '';
        passwordError.innerText = '';

        if(nameRegex.test(nameInput.value) === false){
        nameError.innerText = 'Invalid name!';
        return;
        }
        if(usernameRegex.test(usernameInput.value) === false){
        usernameError.innerText = 'Invalid username!';
        return;
        }
        if(emailRegex.test(emailInput.value) === false){
        emailError.innerText = 'Invalid email!';
        return;
        }
        if(passwordRegex.test(passwordInput.value) === false){
        passwordError.innerText = 'Invalid password!';
        return;
        }
     alert('Success!');
}
</script> 
</html>