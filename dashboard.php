<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #444;
            padding: 10px;
        }

        nav a {
            text-decoration: none;
            color: white;
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>

</head>
<body>
    <header>
        <h1>BookStore</h1>
    </header>
    
    <nav>
        <a href="index.php">Home</a>
        <a href="#">Products</a>
        <a href="#section__a">Users</a>
    </nav>
   
    <section id="section__a">
        <h3><b>Users</b></h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>USERNAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>ROLE</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
  
        <?php 
        include_once 'userRepository.php';

        $userRepository = new UserRepository();

        $users = $userRepository->getAllUsers();

        foreach($users as $user){
            echo 
            "
            <tr>
                <td>$user[id]</td>
                <td>$user[name]</td>
                <td>$user[username] </td>
                <td>$user[email] </td>
                <td>$user[password] </td>
                <td>$user[role] </td>
                <td><a href='edit.php?id=$user[id]'>Edit</a> </td>
                <td><a href='delete.php?id=$user[id]'>Delete</a></td>
            </tr>
            ";
        }
        ?>
    </table>
    </section>
</body>
</html>
