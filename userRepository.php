<?php 
include_once 'databaseConnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function insertUser($user){
        $conn = $this->connection;

        $id = $user->getId();
        $name = $user->getName();
        $username = $user->getUsername();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $role = $user->getRole();

       
        $role = ($username === 'admin') ? 'admin' : 'user';

        $sql = "INSERT INTO user (id,name,username,email,password,role) VALUES (?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$name,$username,$email,$password,$role]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";
    }
    function insertContact($contact) {
        $conn = $this->connection;

        $id = $contact->getId();
        $name = $contact->getName();
        $email = $contact->getEmail();
        $phone = $contact->getPhone();
        $gender = $contact->getGender();
        $message = $contact->getMessage();
    
        $sql = "INSERT INTO contact (id,name, email, phone, gender, message) VALUES (?,?, ?, ?, ?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$id,$name, $email, $phone, $gender, $message]);
    
        echo "<script> alert('Contact information has been inserted successfully!'); </script>";
    }
    

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getAllContacts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM contact";

        $statement = $conn->query($sql);
        $contacts = $statement->fetchAll();

        return $contacts;
    }

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }
    
    function updateUser($id,$name,$username,$email,$password,$role){
         $conn = $this->connection;

         $sql = "UPDATE user SET name=?, username=?, email=?, password=?, role=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$name,$username,$email,$password,$role,$id]);

         echo "<script>alert('update was successful'); </script>";
    }

    function deleteUser($id){
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
    }
    public function isUsernameTaken($username) {
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE username=?";
        $statement = $conn->prepare($sql);

        $statement->execute([$username]);
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        return ($user !== false);
    }
    

    
}
?>