<<<<<<< HEAD
<!DOCTYPE html>

<?php
// conexao
$servername = "localhost";
$username = "root";
$pass = "";
$db_name = "moz_tech";
$connect = mysqli_connect($servername, $username, $pass, $db_name);

//sessao
session_start();

// verificar sessao
if (!isset($_SESSION['logado'])) {
	header('Location: login.php?signup');
	exit();
}

//
if (isset($_SESSION['logado'])) {
	//dados
	$id = $_SESSION['id_user'];
	$sql = "SELECT * FROM users WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Bv4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estillos.css">
    <link type="text/css" rel="stylesheet" href="css/jquery.capty.css"/>
    <link rel="stylesheet" href="fontawesome-free-5.8.2-web/css/all.css">
    <title>MOZ-TECH</title>
</head>

<body style="padding-top: 4.5rem; background-color: rgba(231, 226, 219, 0.712);">
    <div class="navbar navbar-expand-md navbar-dark bg-dark fixed-top py-3">
        <nav class="container">
            <a class="navbar-brand" href="#">TECH - MOZ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <hr class="bg-white">
                <!--
                <form class="form-inline my-2">
                    <input class="form-control mr-4 search ml-5" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-info my-2 my-sm-0" type="submit">Busca</button>
                </form>
-->
                <ul class="navbar-nav ml-auto" style="display: flex; flex-direction: row; justify-content: space-around;">
                    <li class="nav-item" tabindex="0" data-toggle="tooltip" title="Favoritos">
                        <a class="nav-link mr-3" href="checkout.html"><i class="far fa-heart" style="font-size: 30px; color: #fff;"></i></a>
                    </li>
                    <li class="nav-item" tabindex="0" data-toggle="tooltip" title="Assist. tecnica">
                        <a class="nav-link mr-3" href="checkout.html"><i class="fas fa-tools" style="font-size: 30px; color: #fff;"></i></a>
                    </li>
                    <li class="nav-item" tabindex="0" data-toggle="tooltip" title="Carrinho de compras">
                        <a class="nav-link mr-3" href="carrinho.php"><i class="fas fa-cart-plus" style="font-size: 30px; color: #fff;"></i></a>
                    </li>

                    <?php
if (isset($_SESSION['logado'])) {
	echo '
                        <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
	echo "Bem - vindo " . $dados['nome'];
	echo '</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="perfil.php">Meu perfil.</a>
                        <a class="dropdown-item" href="php_action/log.php">Terminar Sessão.</a>
                      </div>
                    </div>
                          ';
} else {
	echo
		'<div class="dropdown">
    		                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Criar Conta
    		                    </button>
    			                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    			                  <a class="dropdown-item" href="Cadastro.php">Criar Conta</a>
    			                  <a class="dropdown-item" href="login.php">Registar -se </a>
    			                </div>
    		              	</div>';
}
?>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container mt-2">
        <div class="row" style="min-height: 450px;">
            <div class="col-md-3">
                <h4 class="bg-dark text-center text-white py-3">Categorias</h4>

                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="#">Informatica</a>
                    </li>

                    <li class="list-group-item">
                        <a href="#">Armazenamento e memoria</a>
                    </li>

                    <li class="list-group-item">
                        <a href="#">Notebooks</a>
                    </li>

                    <li class="list-group-item">
                        <a href="#">Smartphones</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Gamers</a>
                    </li>

                    <li class="list-group-item">
                        <a href="#">Perifericos</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">hardware</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 rounded mt-2">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/ps4-financiamento-2015-2_njpp.jpg" alt="Primeiro Slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/IMG_20190525_230746.jpg" alt="Segundo Slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/Worten10.jpg" alt="Segundo Slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-2">
        <div class="row">
            <div class="col-md-6">
                <section class="painel mais-vendidos">
                    <h4 class="bg-dark text-white py-2 pl-2"><i class="fas fa-hashtag mr-2" style="font-size: 30px; color: #fff;"></i>Novos produtos</h4>
                    <div class="row">
                     <?php
$conexao = mysqli_connect("127.0.0.1", "root", "", "moz_tech");
$dados = mysqli_query($conexao, "SELECT *   FROM    produtos WHERE status = 0 ORDER BY data DESC LIMIT 6");
while ($produto = mysqli_fetch_array($dados)):
?>
                        <div class="col-md-4">
                            <div class="painel">
                                <li class="bg-dark">
                                    <a href="produto.php?id=<?=$produto['id']?>">
                                        <figure>
                                            <img src="img/tech<?=$produto['id']?>.jpg" alt="<?php echo utf8_encode($produto['nome']); ?>" class="content">
                                            <figcaption class="py-2 bg-dark text-white text-center">
                                              <?php echo utf8_encode($produto['preco']) . "MZN" ?>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                            </div>
                        </div>
                    <?php endwhile;?>
                </section>
            </div>

            <div class="col-md-6">
                <section class="painel mais-vendidos">
                    <h4 class="bg-dark text-white py-2 pl-2"><i class="fas fa-shopping-cart mr-2" style="font-size: 30px; color: #fff;"></i>Mais Vendidos</h4>
                    <div class="row">
                    <?php
$conexao = mysqli_connect("127.0.0.1", "root", "", "moz_tech");
$dados = mysqli_query($conexao, "SELECT *   FROM    produtos WHERE status = 0 ORDER BY vendas DESC LIMIT 6");
while ($produto = mysqli_fetch_array($dados)):
?>
                        <div class="col-md-4 col-sm-6">
                            <div class="painel">
                                <li class="bg-dark">
                                    <a href="produto.php?id=<?=$produto['id']?>">
                                        <figure>
                                            <img src="img/tech<?=$produto['id']?>.jpg" alt="<?=utf8_encode($produto['nome']);?>" class="content">
                                            <figcaption class="py-2 bg-dark text-white text-center">
                                              <?php echo utf8_encode($produto['preco']) . "MZN" ?>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                            </div>
                        </div>
                 <?php endwhile;?>
                </section>
            </div>
        </div>
    </div>

    <div class="container">
        <h5 class="shadow bg-dark text-white py-3 pl-3">HARDWARE</h5>
        <div class="shadow bg-white">
            <div class="row">
                <div class="col-12 col-md-3">
                    <a href="">
                        <figure>
                            <img src="img/bannercategoria-hardware-armazenamento.png" alt="" style="width: 100%;">
                            <figcaption></figcaption>
                        </figure>
                    </a>
                </div>

                <div class="col-9">
                    <div class="row mt-5 pt-5 d-painel flex-nowrap hide-block">
                        <div class="col-md-4">
                            <a href="">
                                <figure >
                                    <img src="img/hard (1).jpg" alt="Resfriador Fan Azul" class="content">
                                    <figcaption class="py-2 bg-dark text-white text-center">
                                        3700MZN
                                    </figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="">
                                <figure>
                                    <img src="img/hard (2).jpg" alt="Processador AMD Ryzen1" class="content">
                                    <figcaption class="py-2 bg-dark text-white text-center">
                                        6750MZN
                                    </figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="">
                                <figure>
                                    <img src="img/hard (3).jpg" alt="Chip intel Corei3 6th" class="content">
                                    <figcaption class="py-2 bg-dark text-white text-center">
                                        3400MZN
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container mt-2">
        <h5 class="shadow bg-dark text-white py-3 pl-3 mt-2">INFORMATICA</h5>
        <div class="shadow bg-white">
            <div class="row">
                <div class="col-12 col-md-3">
                    <a href="">
                        <figure>
                            <img src="img/bannercategoria-informatica-bestbattery.png" alt="" style="width: 100%;">
                            <figcaption></figcaption>
                        </figure>
                    </a>
                </div>

                <div class="col-9">
                    <div class="row mt-5 pt-5 d-painel flex-nowrap hide-block">
                        <div class="col-md-4">
                            <a href="">
                                <figure>
                                    <img src="img/moz1 (1).jpg" alt="">
                                    <figcaption class="py-2 bg-dark text-white text-center">
                                        4500MZN
                                    </figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="">
                                <figure>
                                    <img src="img/moz1 (2).jpg" alt="">
                                    <figcaption class="py-2 bg-dark text-white text-center">
                                        6430MZN
                                    </figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="">
                                <figure>
                                    <img src="img/moz1 (3).jpg" id="content" name="#content-target">
                                    <figcaption class="py-2 bg-dark text-white text-center">
                                        3200MZN
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container mt-2">
        <h5 class="shadow bg-dark text-white py-3 pl-3">GAMERS</h5>
        <div class="shadow bg-white">
            <div class="row">
                <div class="col-12 col-md-3">
                    <a href="">
                        <figure>
                            <img src="img/bannercategoria-perifericos-headphoneseheadsets.png" alt="" style="width: 100%;">
                            <figcaption></figcaption>
                        </figure>
                    </a>
                </div>

                <div class="col-9">
                    <div class="row mt-5 pt-5 d-painel flex-nowrap hide-block">
                        <div class="col-md-4">
                            <a href="">
                                <figure>
                                    <img src="img/game (1).jpg" alt="Cadeira Gamer" class="content">
                                    <figcaption class="py-2 bg-dark text-white text-center">
                                        5300MZN
                                    </figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="">
                                <figure>
                                    <img src="img/game (2).jpg" alt="Combo Gamer Teclado + Mouse" class="content">
                                    <figcaption class="py-2 bg-dark text-white text-center">
                                        2800MZN
                                    </figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="">
                                <figure>
                                    <img src="img/game (3).jpg" alt="Teclado Gamer luminoso" class="content">
                                    <figcaption class="py-2 bg-dark text-white text-center">
                                        1200MZN
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <footer class="shadow bg-dark mt-1">
    </footer>


    <script src="Bv4/js/jquery-3.4.1.min.js"></script>
    <script src="Bv4/js/bootstrap.bundle.min.js"></script>
    <script src="Bv4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/config.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.capty.min.js"></script>
<script type="text/javascript" src="js/jquery.zoom.js"></script>
<script type="text/javascript" src="js/image.js"></script>
</body>
</html>
=======
<!DOCTYPE html>

<?php
// conexao
$servername = "localhost";
$username = "root";
$pass = "";
$db_name = "moz_tech";
$connect = mysqli_connect($servername, $username, $pass, $db_name);

//sessao
session_start();


// verificar sessao
if (!isset($_SESSION['logado'])) {
    header('Location: login.php?signup');
    exit();
}

//
if (isset($_SESSION['logado'])) {
    //dados vindos da db
    $id = $_SESSION['id_user'];
    $sql = "SELECT * FROM users WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Bv4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estillos.css">
    <link rel="stylesheet" href="fontawesome-free-5.8.2-web/css/all.css">
    <title>MOZ-TECH</title>
</head>

<body style="padding-top: 4.5rem; background-color: rgba(231, 226, 219, 0.712);">
    <div class="navbar navbar-expand-md navbar-dark bg-dark fixed-top py-3">
        <nav class="container">
            <a class="navbar-brand" href="#">TECH - MOZ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <hr class="bg-white">
                <!--
                <form class="form-inline my-2">
                    <input class="form-control mr-4 search ml-5" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-info my-2 my-sm-0" type="submit">Busca</button>
                </form>
-->
                <ul class="navbar-nav ml-auto" style="display: flex; flex-direction: row; justify-content: space-around;">
                    <li class="nav-item" tabindex="0" data-toggle="tooltip" title="Favoritos">
                        <a class="nav-link mr-3" href="checkout.html"><i class="far fa-heart" style="font-size: 30px; color: #fff;"></i></a>
                    </li>
                    <li class="nav-item" tabindex="0" data-toggle="tooltip" title="Assist. tecnica">
                        <a class="nav-link mr-3" href="checkout.html"><i class="fas fa-tools" style="font-size: 30px; color: #fff;"></i></a>
                    </li>
                    <li class="nav-item" tabindex="0" data-toggle="tooltip" title="Carrinho de compras">
                        <a class="nav-link mr-3" href="#"><i class="fas fa-cart-plus" style="font-size: 30px; color: #fff;"></i></a>
                    </li>

                    <?php
                    	if (isset($_SESSION['logado'])) {
                    		echo '
                        <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                            echo "Bem - vindo ".$dados['nome'];
                      echo '</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="perfil.php">Meu perfil.</a>
                        <a class="dropdown-item" href="php_action/log.php">Terminar Sessão.</a>
                      </div>
                    </div>
                          ';
                    	}else{
                    		echo
                            '<div class="dropdown">
    		                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Criar Conta
    		                    </button>
    			                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    			                  <a class="dropdown-item" href="Cadastro.php">Criar Conta</a>
    			                  <a class="dropdown-item" href="login.php">Registar -se </a>
    			                </div>
    		              	</div>';
                    	}
                    ?>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container mt-2">
        <div class="row" style="min-height: 450px;">
            <div class="col-md-3">
                <h4 class="bg-dark text-center text-white py-3">Categorias</h4>

                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="#">Informatica</a>
                    </li>

                    <li class="list-group-item">
                        <a href="#">Armazenamento e memoria</a>
                    </li>

                    <li class="list-group-item">
                        <a href="#">Notebooks</a>
                    </li>

                    <li class="list-group-item">
                        <a href="#">Smartphones</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Gamers</a>
                    </li>

                    <li class="list-group-item">
                        <a href="#">Perifericos</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">hardware</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 rounded mt-2">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/ps4-financiamento-2015-2_njpp.jpg" alt="Primeiro Slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/IMG_20190525_230746.jpg" alt="Segundo Slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/Worten10.jpg" alt="Segundo Slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-2">
        <div class="row">
            <div class="col-md-6">
                <section class="painel mais-vendidos">
                    <h4 class="bg-dark text-white py-2 pl-2"><i class="fas fa-hashtag mr-2" style="font-size: 30px; color: #fff;"></i>Novos produtos</h4>
                    <div class="row">
                     <?php
                        $conexao    =   mysqli_connect("127.0.0.1", "root", "", "moz_tech");
                        $dados  =   mysqli_query($conexao,  "SELECT *   FROM    produtos WHERE status = 0 ORDER BY data DESC LIMIT 6");
                        while   ($produto   =   mysqli_fetch_array($dados)):
                    ?>
                        <div class="col-md-4">
                            <div class="painel">
                                <li class="bg-dark">
                                    <a href="produto.php?id=<?=	$produto['id']?>">
                                        <figure>
                                            <img src="img/tech<?=	$produto['id']?>.jpg" alt="<?=	$produto['nome']	?>">
                                            <figcaption class="py-2 bg-dark text-white text-center"></figcaption>
                                        </figure>
                                    </a>
                                </li>
                            </div>
                        </div>
                    <?php   endwhile;?>
                </section>
            </div>

            <div class="col-md-6">
                <section class="painel mais-vendidos">
                    <h4 class="bg-dark text-white py-2 pl-2"><i class="fas fa-shopping-cart mr-2" style="font-size: 30px; color: #fff;"></i>Mais Vendidos</h4>
                    <div class="row">
                    <?php
                        $conexao    =   mysqli_connect("127.0.0.1", "root", "", "moz_tech");
                        $dados  =   mysqli_query($conexao,  "SELECT *   FROM    produtos WHERE status = 0 ORDER BY vendas DESC LIMIT 6");
                        while   ($produto   =   mysqli_fetch_array($dados)):
                    ?>
                        <div class="col-md-4">
                            <div class="painel">
                                <li class="bg-dark">
                                    <a href="produto.php?id=<?=	$produto['id']?>">
                                        <figure>
                                            <img src="img/tech<?=	$produto['id']?>.jpg" alt="<?=	$produto['nome']	?>">
                                            <figcaption class="py-2 bg-dark text-white text-center"></figcaption>
                                        </figure>
                                    </a>
                                </li>
                            </div>
                        </div>
                 <?php   endwhile;?>
                </section>
            </div>
        </div>
    </div>

    <div class="container">
        <h5 class="shadow bg-dark text-white py-3 pl-3">HARDWARE</h5>
        <div class="shadow bg-white">
            <div class="row">
                <div class="col-12 col-md-3">
                    <a href="">
                        <figure>
                            <img src="img/bannercategoria-hardware-armazenamento.png" alt="" style="width: 100%;">
                            <figcaption></figcaption>
                        </figure>
                    </a>
                </div>

                <div class="col-9">
                    <div class="row mt-5 pt-5 d-painel flex-nowrap hide-block">
                        <div class="col-md-4">
                            <a href="">
                                <figure>
                                    <img src="img/hard (1).jpg" alt="">
                                    <figcaption class="py-2 bg-dark text-white text-center">LEGENDA</figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="">
                                <figure>
                                    <img src="img/hard (2).jpg" alt="">
                                    <figcaption class="py-2 bg-dark text-white text-center">LEGENDA</figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="">
                                <figure>
                                    <img src="img/hard (3).jpg" alt="">
                                    <figcaption class="py-2 bg-dark text-white text-center">LEGENDA</figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container mt-2">
        <h5 class="shadow bg-dark text-white py-3 pl-3 mt-2">INFORMATICA</h5>
        <div class="shadow bg-white">
            <div class="row">
                <div class="col-12 col-md-3">
                    <a href="">
                        <figure>
                            <img src="img/bannercategoria-informatica-bestbattery.png" alt="" style="width: 100%;">
                            <figcaption></figcaption>
                        </figure>
                    </a>
                </div>

                <div class="col-9">
                    <div class="row mt-5 pt-5 d-painel flex-nowrap hide-block">
                        <div class="col-md-4">
                            <a href="">
                                <figure>
                                    <img src="img/moz1 (1).jpg" alt="">
                                    <figcaption class="py-2 bg-dark text-white text-center">LEGENDA</figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="">
                                <figure>
                                    <img src="img/moz1 (2).jpg" alt="">
                                    <figcaption class="py-2 bg-dark text-white text-center">LEGENDA</figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="">
                                <figure>
                                    <img src="img/moz1 (3).jpg" alt="">
                                    <figcaption class="py-2 bg-dark text-white text-center">LEGENDA</figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container mt-2">
        <h5 class="shadow bg-dark text-white py-3 pl-3">GAMERS</h5>
        <div class="shadow bg-white">
            <div class="row">
                <div class="col-12 col-md-3">
                    <a href="">
                        <figure>
                            <img src="img/bannercategoria-perifericos-headphoneseheadsets.png" alt="" style="width: 100%;">
                            <figcaption></figcaption>
                        </figure>
                    </a>
                </div>

                <div class="col-9">
                    <div class="row mt-5 pt-5 d-painel flex-nowrap hide-block">
                        <div class="col-md-4">
                            <a href="">
                                <figure>
                                    <img src="img/game (1).jpg" alt="">
                                    <figcaption class="py-2 bg-dark text-white text-center">LEGENDA
                                    </figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="">
                                <figure>
                                    <img src="img/game (2).jpg" alt="">
                                    <figcaption class="py-2 bg-dark text-white text-center">LEGENDA</figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="">
                                <figure>
                                    <img src="img/game (3).jpg" alt="">
                                    <figcaption class="py-2 bg-dark text-white text-center">LEGENDA</figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <footer class="shadow bg-dark mt-1">
    </footer>


    <script src="Bv4/js/jquery-3.4.1.min.js"></script>
    <script src="Bv4/js/bootstrap.bundle.min.js"></script>
    <script src="Bv4/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

        // $('.collapse').collapse()

    </script>

</body>

</html>
>>>>>>> 518b15a9e0b6d998b00b7aaf00404cfc073405b2
