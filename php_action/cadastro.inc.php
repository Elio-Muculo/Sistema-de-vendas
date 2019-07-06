<?php
if (isset($_POST['btn_enter'])) {
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
	$email =  clear($_POST['email']);
	$password =  clear($_POST['password']);
	$confirm_senha =  clear($_POST['repassword']);


	if (empty($nome) || empty($email) || empty($password)) {
		header("Location: ../cadastro.php?emptyfields");
		exit();
	}else{
		if ($password !== $confirm_senha) {
			header("Location: ../cadastro.php?password=incorrent");
			exit();
		}else{
			if (!preg_match("/^[a-zA-Z ]+$/", $nome)) {
			header("Location: ../cadastro.php?only letters are allowed");
			exit();
			}else{
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					header("Location: ../cadastro.php?email=invalid");
					exit();
				}else{
					$sql = mysqli_query($connect, "SELECT * FROM users WHERE nome = '$nome'");
					$resultCheck = mysqli_num_rows($sql);

					if ($resultCheck > 0) {
						header("Location: ../cadastro.php?user taken");
						exit();
					}else{
						$hashed_password = password_hash($password, PASSWORD_DEFAULT);
						$sql = "INSERT INTO users (id, nome, email, senha) VALUES (NULL, '$nome', '$email', '$hashed_password')";
						mysqli_query($connect, $sql);
						header("Location: ../cadastro.php?signup=sucess");
						exit();
					}
				}
			}
		}

	}
}else{
	header("Location: cadastro.php");
	exit();
}
