<<<<<<< HEAD
<?php
include_once 'includes/header.php';
include_once 'php_action/produto.php';

?>

<div class="produto-back">
    <div class="container">
        <div class="produto">
            <h1><?=utf8_encode($produto['nome'])?></h1>
            <p>>por apenas <?=$produto['preco'] . "MZN"?></p>
            <form action="checkout.php" method="POST">
                <input type="hidden" name="nome" value="<?=$produto['nome']?>">
                <input type="hidden" name="preco" value="<?=$produto['preco']?>">
                <input type="hidden" name="id" value="<?=$produto['id']?>">
                <fieldset class="cores">
                    <legend>Escolha a cor:</legend>

                    <input type="radio" name="cor" value="verde" id="verde" alt="verde" checked>
                    <label for="verde">
                        <img src="img/tech<?=$produto['id']?>.jpg" alt="<?=$produto['nome']?>">
                    </label>

                    <input type="radio" name="cor" value="rosa" id="rosa" alt="rosa">
                    <label for="rosa">
                        <img src="img/produtos/foto<?=$produto['id']?>-rosa.png" alt="rosa">
                    </label>

                    <input type="radio" name="cor" value="azul" id="azul" alt="azul">
                    <label for="azul">
                        <img src="img/produtos/foto<?=$produto['id']?>-azul.png" alt="azul">
                    </label>
                </fieldset>

                <legend>Escolha a quantidade</legend>
                <input type="number" class="btn" name="tamanho" id="tamanho" placeholder="0" style="width: 120px; border-radius: 10px; border-color: currentColor;">
                <span style="display: flex;">
                    <input type="submit" class="comprar " value="comprar">
                    <a href="carrinho.php?acao=add&id=<?php echo $produto['id']?>"><button type="button" class="btn btn-danger comprar" style="background-color: #F66;">Carrinho<i class="fas fa-cart-plus fas-2x" style="font-size: 30px; color: #fff;"></i></button></a>
                </span>
            </form>
        </div>
        <div class="detalhes">
            <h2>Detalhes do produto</h2>

            <p><?=utf8_encode($produto['descricao'])?>
            </p>
        </div>
    </div>
</div>
</div>

<script src="Bv4/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/jquery.zoom.js"></script>
<script type="text/javascript" src="js/image.js"></script>

</body>
</html>
=======
<?php
include_once 'includes/header.php';
include_once 'php_action/produto.php';

?>
<div class="produto-back">
    <div class="container">
        <div class="produto">
            <h1><?= utf8_encode($produto['nome'])    ?></h1>
            <p>>por apenas <?=  $produto['preco'];  ?></p>
            <form action="checkout.php" method="POST">
                <input type="hidden" name="nome" value="<?= $produto['nome']    ?>">
                <input type="hidden" name="preco" value="<?=    $produto['preco']   ?>">
                <input type="hidden" name="id" value="<?=   $produto['id']  ?>">
                <fieldset class="cores">
                    <legend>Escolha a cor:</legend>

                    <input type="radio" name="cor" value="verde" id="verde" alt="verde" checked>
                    <label for="verde">
                        <img src="img/tech<?=  $produto['id']  ?>.jpg" alt="">
                    </label>

                    <input type="radio" name="cor" value="rosa" id="rosa" alt="rosa">
                    <label for="rosa">
                        <img src="img/produtos/foto<?=  $produto['id']  ?>-rosa.png" alt="rosa">
                    </label>

                    <input type="radio" name="cor" value="azul" id="azul" alt="azul">
                    <label for="azul">
                        <img src="img/produtos/foto<?=  $produto['id']  ?>-azul.png" alt="azul">
                    </label>
                </fieldset>

                <legend>Escolha a quantidade</legend>
                <input type="number" name="tamanho" id="tamanho" placeholder="0" style="width: 70px;">
                <input type="submit" class="comprar " value="comprar">
            </form>
        </div>
        <div class="detalhes">
            <h2>Detalhes do produto</h2>

            <p><?=  utf8_encode($produto['descricao'])   ?>
            </p>
        </div>
    </div>
</div>
</div>

</html>
>>>>>>> 518b15a9e0b6d998b00b7aaf00404cfc073405b2
