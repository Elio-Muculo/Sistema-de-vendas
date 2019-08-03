<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Bv4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estillos.css">
    <link rel="stylesheet" type="text/css" href="css/produto.css">
    <link rel="stylesheet" type="text/css" href="css/checkout.css">
    <link rel="stylesheet" href="fontawesome-free-5.8.2-web/css/all.css">
        <!--[if lt  IE  9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <title>TECH - MOZ</title>
</head>

<body style="padding-top: 4.5rem; background-color: rgba(255, 255, 255);">
    <div class="navbar navbar-expand-md navbar-dark bg-dark fixed-top py-3">
        <nav class="container">
            <a class="navbar-brand" href="index.php">TECH - MOZ</a>
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
                </ul>
        </nav>
    </div>
