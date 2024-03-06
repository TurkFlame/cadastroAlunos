<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style src="./src/public/css/style.css"></style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Criação Aluno</title>
</head>

<body>
    <form action="/projeto/src/helpers/validaCriacaoAluno.php" method="post">
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="name">
            <div class="form-group">
                <input type="text" name="registration" class="form-control" placeholder="registration">
            </div>
        </div>
        <div class="form-group">
            <input type="text" name="course" class="form-control" placeholder="course">
        </div>
        <?php if (isset($_GET["login"]) && $_GET["login"] == "erro") { ?>
            <div class="text-danger">
                Usuário ou senha inválido
            </div>
        <?php } ?>
        <button class="btn btn-lg btn-info btn-block" type="submit">Submit</button>
    </form>
    <?php

    ?>
</body>

</html>