<?php
session_start();
if (isset($_SESSION)) {
    session_destroy();
}
header("location: http://localhost/cadastroAlunos/public/index.php");
exit();