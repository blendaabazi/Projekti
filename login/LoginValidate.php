<?php
    include_once '../user/userRepository.php';
    include_once '../bookstoreDB/databaseConnection.php';
   if(isset($_POST['loginBtn'])){
       if(empty($_POST['username']) || empty($_POST['password'])){
           echo "Fill all fields!";}
       
    else{
           $username = $_POST['username'];
           $password = $_POST['password'];
          
           $userRepository = new UserRepository();
           $users = $userRepository->getAllUsers();
           $i=0;
           foreach($users as $user){
             
               if($username == $user['username'] && $password == $user['password']){
                   session_start();
                   $_SESSION['username'] = $username;
                   $_SESSION['password'] = $password;
                   $_SESSION['role'] = $user['role'];
                   header("location:../pages/index.php");
                   exit();

               }else{
                   $i++; 
                   if($i == sizeof($user)){
                     if($username == $user['username'] && $password != $user['password']){
                        echo 'Password incorrect!';
                        exit();
        
                        }
                       else if($username != $user['username']){
                           echo 'Username does not exist!';
                           exit();
                       }
                   }
                   
               }
           }
       }
   }
 
?>