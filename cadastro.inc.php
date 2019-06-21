<?php
$servername = "localhost";
$username = "root";
$pass = "";
$db_name = "moz_tech";
$connect = mysqli_connect($servername, $username, $pass, $db_name);

$nome =  mysqli_escape_string($connect, $_POST['nome']);
$email =  mysqli_escape_string($connect, $_POST['email']);
$password =  mysqli_escape_string($connect, $_POST['password']);
$confirm_senha =  mysqli_escape_string($connect, $_POST['repassword']);


if (empty($nome) || empty($email) || empty($password)) {
	header("Location: index.php?emptyfields");
}
if ($password !== $confirm_senha) {
	header("Location: index.php?senha incompativeis");
	exit();
}

$pass = md5($password);

$sql = "INSERT INTO usuarios (id, nome, Email, senha) VALUES (NULL, '$nome', '$email', md5('$password'))";

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
