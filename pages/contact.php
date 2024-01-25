<?php
class Contact {
    private $id;
    private $name;
    private $email;
    private $phone;
    private $gender;
    private $message;

    // Konstruktori
    function __construct($id, $name, $email,$phone,$gender,$message) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->gender = $gender;
        $this->message = $message;
    }

    // Metodat Get
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }
    function getPhone() {
        return $this->phone;
    }
    function getGender() {
        return $this->gender;
    }

    function getMessage() {
        return $this->message;
    }
}
?>
