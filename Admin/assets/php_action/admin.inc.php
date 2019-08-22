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
	$password =  clear($_POST['pwd']);
	$email = clear($_POST['mail']);

	if (empty($nome) || empty($password)) {
		header("Location: ../../ui.php?emptyfields");
		exit();
	}else{
		if (!preg_match("/^[a-zA-Z ]+$/", $nome)) {
		header("Location: ../../ui.php?only letters are allowed");
		exit();
		}else{
			$sql = mysqli_query($connect, "SELECT * FROM users WHERE nome = '$nome'");
			$resultCheck = mysqli_num_rows($sql);

			if ($resultCheck > 0) {
				header("Location: ../../ui.php?user taken");
				exit();
			}else{
				$hashed_password = password_hash($password, PASSWORD_DEFAULT);
				$sql = "INSERT INTO users (id, nome, email, senha, status) VALUES (NULL, '$nome', '$email', '$hashed_password','1')";
				mysqli_query($connect, $sql);
				header("Location: ../../ui.php?signup=sucess");
				exit();
			}
		}
	}
}else{
	header("Location: ../../ui.php");
	exit();
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
	$password =  clear($_POST['pwd']);
	$email = clear($_POST['mail']);

	if (empty($nome) || empty($password)) {
		header("Location: ../../ui.php?emptyfields");
		exit();
	}else{
		if (!preg_match("/^[a-zA-Z ]+$/", $nome)) {
		header("Location: ../../ui.php?only letters are allowed");
		exit();
		}else{
			$sql = mysqli_query($connect, "SELECT * FROM users WHERE nome = '$nome'");
			$resultCheck = mysqli_num_rows($sql);

			if ($resultCheck > 0) {
				header("Location: ../../ui.php?user taken");
				exit();
			}else{
				$hashed_password = password_hash($password, PASSWORD_DEFAULT);
				$sql = "INSERT INTO users (id, nome, email, senha, status) VALUES (NULL, '$nome', '$email', '$hashed_password','1')";
				mysqli_query($connect, $sql);
				header("Location: ../../ui.php?signup=sucess");
				exit();
			}
		}
	}
}else{
	header("Location: ../../ui.php");
	exit();
}
>>>>>>> 518b15a9e0b6d998b00b7aaf00404cfc073405b2
