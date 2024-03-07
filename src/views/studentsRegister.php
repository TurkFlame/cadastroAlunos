<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos Cadastrados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once "../controllers/studentController.php";
    require_once "../components/navbar.php";
    require_once "../controllers/authController.php"; 

    $navbar = new Navbar();
    echo $navbar->returnNavbar();
    
    $studentRegister = new StudentRegister();

    $authController = new AuthController;
    $authController->checkAuth();
    ?>

    <div class="container">
        <h2>Alunos Cadastrados</h2>
        <ul class="list-group">
            <?php echo $studentRegister->getStudents(); ?>
        </ul>
    </div>
</body>

</html>
