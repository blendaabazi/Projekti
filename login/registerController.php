<?php
include_once '../user/userRepository.php';
include_once '../user/user.php';

function validateUserData($name, $username, $email, $password) {
    if (empty($name) || empty($username) || empty($email) || empty($password)) {
        return false;
    }
    

    return true;
}
    if (isset($_POST['registerBtn'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        // Validimi i te dhenave ne backend
        if (validateUserData($name, $username, $email, $password)) {
            $userRepository = new UserRepository();
    
            // Kontrollo nese emri i perdoruesit tashme ekziston ne databaze
            if ($userRepository->isUsernameTaken($username)) {
                echo "Username is already taken. Please choose another one.";
            } else {
                $role = ($username === 'admin') ? 'admin' : 'user';
                $user = new User(null, $name, $username, $email, $password, $role);
                $userRepository->insertUser($user);
            }
        } else {
            echo "Invalid data. Please check your input.";
        }
    }





?>
