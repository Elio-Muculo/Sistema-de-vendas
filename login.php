<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!--    VIEWPORT-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--    BOOTSTRAP-->
    <link rel="stylesheet" href="Bv4/css/bootstrap.min.css">
    <!--    MATERIALIZE-->
    <!--    <link rel="stylesheet" href="Materialize/materialize.min.css">-->
</head>


<body>

    <header class="text-center mt-5 mt-md-3 pt-md-5 pt-0">
        <h4 class="text-uppercase text-dark">Bem - Vindo Ao Tech-Moz</h4>
        <p class="py-3 text-capitalize font-weight-light text-dark">Não perca tempo. Encontre aqui os melhores equipamentos do mercado informatico</p>
    </header>

    <section class="container shadow p-3 mb-5 bg-white rounded-2 w-25 w-sm-25 border border-info">
        <h4 class="text-center">LOGIN</h4>

        <form action="php_action/login.inc.php" method="POST" class="d-flex flex-column p-2">
            <div class="form-group">
                <label for="nome">Usuario</label>
                <input type="text" id="nome" name="nome" class="form-control form-control-md" required>
            </div>

            <div class="form-group">
                <label for="password" class="mt-2">Senha</label>
                <input type="password" id="password" class="form-control form-control-md" name="password" required>
            </div>

            <button type="submit" name="btn" class="btn btn-outline-info btn-lg btn-block mt-2">Entrar</button>
        </form>
    </section>

    <section class="text-center w-25 w-md-25 container">
        <div class="shadow border border-info bg-white">
            <p class="mt-3 text-dark">Novo no Tech - Moz? <a href="cadastro.php">Crie uma Conta.</a> </p>
        </div>
    </section>


    <!--    JQUERY-->
    <script src="jquery/jquery-3.4.1.min.js"></script>
</body>

</html>
