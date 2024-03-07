<?php
session_start();
if (isset($_SESSION)) {
    session_destroy();
}
header("location: http://localhost/cadastroAlunos/public/index.php");
exit();

//Helper do logout, onde está presente a lógica para deslogar o usuário caso aperte o botão de logout