<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style src="./src/public/css/style.css"></style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Criação Aluno</title>
</head>
<body>
    <?php
        require_once "../controllers/authController.php";
        require_once "../components/navbar.php";

        $authController = new AuthController;
        $authController->checkAuth();

        $navbar = new Navbar();
        echo $navbar->returnNavbar();
        ?>
    <form action="../helpers/studentValidate.php" method="post">
        <div class="form-group">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
            <div class="form-group">
                <input type="text" name="registration" class="form-control" placeholder="registration">
            </div>
            <div class="form-group">
                <input type="text" name="course" class="form-control" placeholder="course">
            </div>
        </div>
        <button class="btn btn-lg btn-info btn-block" type="submit">Submit</button>
    </form>
</body>
</html>