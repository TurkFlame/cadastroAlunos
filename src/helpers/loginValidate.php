<?php 

require_once "../controllers/LoginController.php";
$loginController = new LoginController();
$loginController->authenticate($_POST["email"], $_POST["password"]);
