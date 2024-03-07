<?php
class AuthController
{
    //Criei uma classe que faz toda a ação de verificar o status de autenticação do usuário, para ser reutilizável em outras partes do código
    public function checkAuth()
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        if (!isset($_SESSION["authenticate"]) || $_SESSION["authenticate"] != true) {
            header("Location: http://localhost/cadastroAlunos/public/index.php");
            exit;
        }

    }

}