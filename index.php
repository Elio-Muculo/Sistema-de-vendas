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


//verificar sessao
if (!isset($_SESSION['logado'])) {
    header('Location: login.php?signup');
}

//dados
$id = $_SESSION['id_user'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Bv4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estillos.css">
    <link rel="stylesheet" href="fontawesome-free-5.8.2-web/css/all.css">
    <title>Teste 6</title>
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
                    <li class="nav-item">
                        <a class="nav-link mr-3" href="checkout.html"><i class="far fa-heart" style="font-size: 30px; color: #fff;"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-3" href="checkout.html"><i class="fas fa-tools" style="font-size: 30px; color: #fff;"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-3" href="#"><i class="fas fa-cart-plus" style="font-size: 30px; color: #fff;"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-3" href="login.php"><i class="fas fa-sign-in-alt" style="font-size: 30px; color: #fff;"></i></a>
                    </li>
                </ul>

                <h5  class="text-white">Ola <?php echo $dados['nome']; ?> </h5>
                <button type="button" class="btn btn-dark rounded-circle" name="button"><a href="log.php" class="text-white">Sair</a> </button>
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
                        <div class="col-6">
                            <div class="painel">
                                <?php
								$conexao	=	mysqli_connect("127.0.0.1",	"root",	"",	"moz_tech");
								$dados	=	mysqli_query($conexao,	"SELECT	*	FROM	produtos LIMIT 3");
								while	($produto	=	mysqli_fetch_array($dados)):
							?>
                                <li class="bg-dark">
                                    <a href="produto.php?id=<?=	$produto['id']?>">
                                        <figure>
                                            <img src="img/tech<?=	$produto['id']?>.jpg" alt="<?=	$produto['nome']	?>">
                                            <figcaption class="py-2 bg-dark text-white text-center"></figcaption>
                                        </figure>
                                    </a>
                                </li>
							 <?php	endwhile;?>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="painel">
                               <?php
								$conexao	=	mysqli_connect("127.0.0.1",	"root",	"",	"moz_tech");
								$dados	=	mysqli_query($conexao,	"SELECT	*	FROM produtos LIMIT 3 OFFSET 3");
								while	($produto	=	mysqli_fetch_array($dados)):
							?>
                                <li class="bg-dark">
                                    <a href="produto.php?id=<?=	$produto['id']?>">
                                        <figure>
                                            <img src="img/tech<?=	$produto['id']?>.jpg" alt="<?=	$produto['nome']	?>">
                                            <figcaption class="py-2 bg-dark text-white text-center"></figcaption>
                                        </figure>
                                    </a>
                                </li>
							 <?php	endwhile;?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-md-6">
                <section class="painel mais-vendidos">
                    <h4 class="bg-dark text-white py-2 pl-2"><i class="fas fa-shopping-cart mr-2" style="font-size: 30px; color: #fff;"></i>Mais Vendidos</h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="painel">
                            <?php
              								$conexao	=	mysqli_connect("127.0.0.1",	"root",	"",	"moz_tech");
              								$dados	=	mysqli_query($conexao,	"SELECT	*	FROM	produtos LIMIT 3 OFFSET 6");
              								while	($produto	=	mysqli_fetch_array($dados)):
              							?>
                                <li class="bg-dark">
                                    <a href="produto.php?id=<?=	$produto['id']?>">
                                        <figure>
                                            <img src="img/tech<?=	$produto['id']?>.jpg" alt="<?=	$produto['nome']	?>">
                                            <figcaption class="py-2 bg-dark text-white text-center"></figcaption>
                                        </figure>
                                    </a>
                                </li>
							               <?php	endwhile;?>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="painel">
              							 <?php
              								$conexao	=	mysqli_connect("127.0.0.1",	"root",	"",	"moz_tech");
              								$dados	=	mysqli_query($conexao,	"SELECT	*	FROM	produtos LIMIT 3 OFFSET 9");
              								while	($produto	=	mysqli_fetch_array($dados)):
              							?>
                                <li class="bg-dark">
                                    <a href="produto.php?id=<?=	$produto['id']?>">
                                        <figure>
                                            <img src="img/tech<?=	$produto['id']?>.jpg" alt="<?=	$produto['nome']	?>">
                                            <figcaption class="py-2 bg-dark text-white text-center"></figcaption>
                                        </figure>
                                    </a>
                                </li>
							               <?php	endwhile;?>
                            </div>
                        </div>
                    </div>
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

                <div class="col-9"></div>

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

                <div class="col-9"></div>

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
                    <div class="row d-painel flex-nowrap hide-block">
                        <div class="col-md-4">
                            <a href="">
                                <figure>
                                    <img src="img/SM2280S3G2-240.jpg" alt="">
                                    <figcaption class="py-2 bg-dark text-white text-center">LEGENDA</figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="">
                                <figure>
                                    <img src="img/SM2280S3G2-240.jpg" alt="">
                                    <figcaption class="py-2 bg-dark text-white text-center">LEGENDA</figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="">
                                <figure>
                                    <img src="img/SM2280S3G2-240.jpg" alt="">
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
        <p>aaaa</p>
        <a href="">aaaaa</a>
    </footer>


    <script src="Bv4/js/jquery-3.4.1.min.js">
    </script>
    <script src="Bv4/js/bootstrap.min.js"></script>
    <script src="Bv4/js/bootstrap.bundle.min.js"></script>
</body></html>
