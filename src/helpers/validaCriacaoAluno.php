<?php

require_once '../controllers/cadastroAluno.php';

$cadastroAlunos = new CadastroAluno();
$cadastroAlunos->cadastrarAluno($_POST["name"], $_POST["registration"], $_POST["course"]);
