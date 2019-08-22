<<<<<<< HEAD
<?php
if (isset($_POST)) {
	$servername = "localhost";
	$username = "root";
	$pass = "";
	$db_name = "moz_tech";
	$connect = mysqli_connect($servername, $username, $pass, $db_name);

	function clear($input) {
		global $connect;
		// sql injection
		$filter = mysqli_real_escape_string($connect, $input);

		// XSS
		$filter = htmlspecialchars($filter);
		return $filter;
	}
	$nome =  clear($_POST['nome']);
	$preco =  clear($_POST['preco']);
	$desc =  clear($_POST['desc']);
	$data =  clear($_POST['data']);
    $qtd = clear($_POST['qtd']);

    $sql = "INSERT INTO produtos (nome, preco, descricao, data, quantidade) VALUES ('$nome', '$preco', '$desc', '$data', '$qtd')";
    mysqli_query($connect, $sql);
    header("Location: ../../index.php?sucess");

}
=======
<?php
if (isset($_POST)) {
	$servername = "localhost";
	$username = "root";
	$pass = "";
	$db_name = "moz_tech";
	$connect = mysqli_connect($servername, $username, $pass, $db_name);

	function clear($input) {
		global $connect;
		// sql injection
		$filter = mysqli_real_escape_string($connect, $input);

		// XSS
		$filter = htmlspecialchars($filter);
		return $filter;
	}
	$nome =  clear($_POST['nome']);
	$preco =  clear($_POST['preco']);
	$desc =  clear($_POST['desc']);
	$data =  clear($_POST['data']);
    $qtd = clear($_POST['qtd']);

    $sql = "INSERT INTO produtos (nome, preco, descricao, data, quantidade) VALUES ('$nome', '$preco', '$desc', '$data', '$qtd')";
    mysqli_query($connect, $sql);
    header("Location: ../../index.php?sucess");

}
>>>>>>> 518b15a9e0b6d998b00b7aaf00404cfc073405b2
