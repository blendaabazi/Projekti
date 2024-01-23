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
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
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
<body>
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
</body>
</html>