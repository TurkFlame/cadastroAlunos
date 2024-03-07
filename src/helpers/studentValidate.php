<?php

require_once '../controllers/studentController.php';

$studentRegister = new StudentRegister();
$studentRegister->registerStudent($_POST["name"], $_POST["registration"], $_POST["course"]);
header("Location: ../views/studentsRegister.php");
