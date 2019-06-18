<html>
<head>

</head>
<body>
<?php
	$conexao	=	mysqli_connect("127.0.0.1",	"root",	"",	"moz_tech");
	$dados	=	mysqli_query($conexao,	"SELECT	*	FROM	produtos	WHERE	id	=	$_GET[id]");
	$produto	=	mysqli_fetch_array($dados);
?>
	<div class="produto-back">
	    <div class="container">
	        <div class="produto">
	            <h1><?=	$produto['nome']?></h1>
	            <p>>por apenas <?=	$produto['preco']	?></p>
	            <form action="checkout.php" method="POST">
	                <input type="hidden" name="nome" value="<?=	$produto['nome']	?>">
	                <input type="hidden" name="preco" value="<?=	$produto['preco']	?>">
	                <input type="hidden" name="id" value="<?=	$produto['id']	?>">
	                <fieldset class="cores">
	                    <legend>Escolha a cor:</legend>

	                    <input type="radio" name="cor" value="verde" id="verde" alt="verde" checked>
	                    <label for="verde">
	                        <img src="img/tech<?=	$produto['id']	?>.jpg" alt="<?=	$produto['nome']	?>">
	                    </label>

	                    <input type="radio" name="cor" value="rosa" id="rosa" alt="rosa">
	                    <label for="rosa">
	                        <img src="img/produtos/foto<?=	$produto['id']	?>-rosa.png" alt="rosa">
	                    </label>

	                    <input type="radio" name="cor" value="azul" id="azul" alt="azul">
	                    <label for="azul">
	                        <img src="img/produtos/foto<?=	$produto['id']	?>-azul.png" alt="azul">
	                    </label>
	                </fieldset>
	                <fieldset class="tamanhos">
	                    <legend>Escolha o tamanho</legend>
	                    <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
	                    <output for="tamanho" name="valorTamanho">42</output>
	                </fieldset>
	                <input type="submit" class="comprar" value="comprar">
	            </form>
	        </div>
	</body>

	</html>
