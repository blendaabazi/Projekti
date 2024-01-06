<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="LoginForm.css">
</head>
<body>
    <div class="container">
        <div class="box loginbox">
            <div class="detais dtsignin">
                <h2>Login</h2>
                <div class="box-wraper">
                    <input type="text" placeholder="Username" id="username">
                    <label for="">Username</label>
                    <div class="error-message" id="usernameError"></div>
                </div>
                <div class="box-wraper">
                    <input type="password" placeholder="Password" id="password">
                    <label for="">Password</label>
                    <div class="error-message" id="passwordError"></div>
                </div>
                <button id="btnlgn" onclick="func1()">Login</button>
                <p>Don't have account?<a href="#" id="link_rg" >Register</a></p>
            </div>
       
        <div class="singupbox" >
            <div class="detais dtsignup">
                <h2>Register</h2>
                <div class="box-wraper">
                    <input type="text" placeholder="Name Surname" id="name">
                    <label for="">Name</label>
                    <div class="error-message" id="nameError"></div>
                </div>
                <div class="box-wraper">
                    <input type="text" placeholder="Username" id="uname">
                    <label for="">Username</label>
                    <div class="error-message" id="uError"></div>
                </div>
                <div class="box-wraper">
                    <input type="email" placeholder="Email" id="email">
                    <label for="">Email</label>
                    <div class="error-message" id="emailError"></div>
                </div>
                <div class="box-wraper">
                    <input type="password" placeholder="Password" id="pass">
                    <label for="">Password</label>
                    <div class="error-message" id="passError"></div>
                </div>
    
                <button id="btnrg" onclick="func2()">Register</button>
                <p>Already have account?<a href="#" id="link_lg">Login</a></p>
            </div>
        </div>
    </div>
</body>
 <script>
    let detlg = document.querySelector(".dtsignin");
    let detrg = document.querySelector(".dtsignup");

    let linkrg = document.querySelector("#link_rg");
    let linklg = document.querySelector("#link_lg");

    function callsign(){
        detlg.classList.toggle("callreg");
        detrg.classList.toggle("setreg");
    }

    linkrg.addEventListener("click",callsign);
    linklg.addEventListener("click",callsign);

    let usernameRegex = /[A-Za-z0-9.-_]{8,15}$/;
    let passwordRegex = /^[A-Z]+[a-z.-_]+[0-9]{3}$/;
    let nameRegex=/^[A-Z][a-z]{2,20}/;
    let emailRegex =/[a-z0-9.-_]+@+[\sa-z]+\.+[\sa-z]{2,4}$/;

    function func1(){

        let usernameInput = document.getElementById('username');
        let usernameError = document.getElementById('usernameError');
        let passwordInput = document.getElementById('password');
        let passwordError = document.getElementById('passwordError');
        
        usernameError.innerText = '';
        passwordError.innerText = '';

        if(usernameRegex.test(usernameInput.value) === false){
        usernameError.innerText = 'Invalid input';
        return;
       }
       if(passwordRegex.test(passwordInput.value) === false){
        passwordError.innerText = 'Invalid input';
        return;
       }

      alert('Success!');
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
        nameError.innerText = 'Emri juaj duhet te filloj me shkronje te madhe!';
        return;
        }
        if(usernameRegex.test(usernameInput.value) === false){
        usernameError.innerText = 'Username duhet te perfshije 8-15 karaktere!';
        return;
        }
        if(emailRegex.test(emailInput.value) === false){
        emailError.innerText = 'Invalid email input';
        return;
        }
        if(passwordRegex.test(passwordInput.value) === false){
        passwordError.innerText = 'Password duhet te filloj me shkronje te madhe me 3 numra';
        return;
        }
     alert('Success!');
}
</script> 
</html>