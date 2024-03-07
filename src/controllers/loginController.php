<?php

require_once "../models/user.php";

class LoginController {
    private $users;

    public function __construct()
    {
        $this->users = [
            new User('123','adm@teste.com.br'),
            new User('123','user@teste.com.br'),
            new User('dsgifhsig','jose@teste.com.br')
        ];
    }

    public function authenticate($email, $password)
    {
        foreach ($this->users as $user) {
            if ($user->getEmail() == $email && $user->validatePassword($password)) {
                session_start();
                $_SESSION['authenticate'] = true;
                header('Location: ../views/registerStudent.php');
                exit();
            }
        }
        header("Location: ../../public/index.php");
        
        exit();
    }
}
