<?php

require_once "../models/user.php";
//Criei uma classe para controlar as informações de login contendo 3 usuários padrões para testes.
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

    // O método de autenticação, 
    //verifica as credênciais do usuário. Se estiver tudo dentro dos conformes ele inicia uma nova sessão para o usuário contendo uma chave 
    //chamada authenticate, onde vamos usar para verificar se o usuário pode acessar o que ele está tentando acessar.

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
