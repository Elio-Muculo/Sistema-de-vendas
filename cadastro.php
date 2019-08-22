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

    <header class="text-center mt-3 pt-3 pt-0">
        <h4 class="text-uppercase text-dark">Bem - Vindo Ao Tech-Moz</h4>
        <p class="py-3 text-capitalize font-weight-light text-dark">Não perca tempo. Encontre aqui os melhores equipamentos do mercado informatico</p>
    </header>

    <section class="container shadow p-3 mb-5 bg-white rounded-2 w-25 w-sm-25 border border-info">
        <h4 class="text-center">CADASTRE - SE</h4>

        <form action="php_action/cadastro.inc.php" method="POST" class="d-flex flex-column p-2">
            <div class="form-group">
                <label for="">Nome</label>
                <input type="text" name="nome" class="form-control form-control-md" required>
            </div>

            <div class="form-group">
                <label for="">E - mail</label>
                <input type="text" id="email" name="email" class="form-control form-control-md" required>
            </div>

            <div class="form-group">
                <label for="password" class="mt-2">Senha</label>
                <input type="password" id="password" class="form-control form-control-md" name="password" required>
            </div>

            <div class="form-group">
                <label for="password" class="mt-2">Confirmar a Senha</label>
                <input type="password" id="password" class="form-control form-control-md" name="repassword" required>
            </div>

            <button type="submit" name="btn_enter" class="btn btn-outline-info btn-lg btn-block mt-2">Cadastre - se</button>
        </form>
    </section>
    <!--    JQUERY-->
    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="Materialize/materialize.min.js"></script>
</body>

</html>
