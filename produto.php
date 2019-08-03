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
