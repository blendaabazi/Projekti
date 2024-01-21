<?php

class User{
    private $id;
    private $name;
    private $username;
    private $email;
    private $password;
    private $role;

    function __construct($id,$name,$username,$email,$password,$role){
        $this->id = $id;
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getEmail(){
        return $this->email;
    }
    function getUsername(){
        return $this->username;
    }
    function getPassword(){
      return $this->password;
    } 
    function getRole(){
      return $this->role;
    }  
    public function setRole($role) {
        $this->role = $role;
    }
}

?>