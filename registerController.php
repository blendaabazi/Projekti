<?php
include_once 'userRepository.php';
include_once 'user.php';


if(isset($_POST['loginBtn'])){
    if(empty($_POST['name']) ||  empty($_POST['email']) ||
    empty($_POST['username']) || empty($_POST['password'])){
        echo "Fill all fields!";
    }else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = "user";

        $user  = new User(null,$name,$username,$email,$password,$role);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);
    }
}
?>