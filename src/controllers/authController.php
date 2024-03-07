<?php
class AuthController
{
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