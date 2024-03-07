<?php

class User{
    protected $password;
    protected $email;

    public function __construct($password, $email){
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->email = $email;
    }

    public function validatePassword($password){
        return password_verify($password, $this->password);
    }

    public function getEmail() {
        return $this->email;
    }
}

?>