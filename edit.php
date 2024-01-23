
<?php
$userId = $_GET["id"];
include 'userRepository.php';

$userRepository = new UserRepository();

$user  = $userRepository->getUserById($userId);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h3 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
<body>
<div class="btn-container">
        <a href="index.php">Home</a>
        <a href="LogOut.php">Logout</a>
    </div>

    <form action="" method="post">
        <input type="text" name="id"  value="<?=$user['id']?>" readonly> <br> <br>
        <input type="text" name='name'  value="<?=$user['name']?>"> <br> <br>
        <input type="text" name='username'  value="<?=$user['username']?>"> <br> <br>
        <input type="text" name="email"  value="<?=$user['email']?>"> <br> <br>
        <input type="text" name="password"  value="<?=$user['password']?>"> <br> <br>
        <input type="text" name="role"  value="<?=$user['role']?>"> <br> <br>

        <input type="submit" name="editBtn" value="Save"> <br> <br>
    </form>
</body>
</html>

<?php 
if(isset($_POST['editBtn'])){
    $id = $user['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $userRepository->updateUser($id,$name,$username,$email,$password,$role);
    header("location:dashboard.php");
    
}
?>