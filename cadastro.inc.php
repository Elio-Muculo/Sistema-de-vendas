<?php
$servername = "localhost";
$username = "root";
$pass = "";
$db_name = "moz_tech";
$connect = mysqli_connect($servername, $username, $pass, $db_name);

function clear($input) {
	global $connect;
	// sql injection
	$filter = mysql_real_escape_string($connect, $input);

	// XSS
	$filter = htmlspecialchars($filter);
	return $filter;
}

$nome =  clear($_POST['nome']);
$email =  clear($_POST['email']);
$password =  clear($_POST['password']);
$confirm_senha =  clear($_POST['repassword']);


if (empty($nome) || empty($email) || empty($password)) {
	header("Location: cadastro.php?emptyfields");
}elseif ($password !== $confirm_senha) {
	header("Location: cadastro.php?senha incompativeis");
	exit();
}

$senha = md5($password);

$sql = "INSERT INTO usuarios (id, nome, Email, senha) VALUES (NULL, '$nome', '$email', '$senha')";

if (mysqli_query($connect, $sql)) {
 // echo "Cadastrado com sucesso";
 header("Location: index.php");
}else{
 echo "Error: ". $sql . "<br>" . mysqli_error($connect);
}


if (mysqli_connect_error()) {
 echo "Falha ao conectar ". mysqli_connect_error();
}
?>
