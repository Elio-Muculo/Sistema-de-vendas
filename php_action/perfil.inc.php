<?php
if (isset($_POST)) {
	$connect = mysqli_connect("localhost", "root", "", "moz_tech");

	function clear($input) {
		global $connect;
		// sql injection
		$filter = mysqli_real_escape_string($connect, $input);

		// XSS
		$filter = htmlspecialchars($filter);
		return $filter;
	}
}

$id = clear($_POST['id']);
$format = array("png", "jpg", "bmp"); //formatos permitidos
$ext = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION); // pegar extensao

// verificar se o arquivo e valido (a extensao do arquivo)

if (in_array($ext, $format)) {
	$dir = "../uploads/"; // pasta que vai ter os upload
	$newName = "tech" . $id . "." . $ext;
	$tmp = $_FILES['arquivo']['tmp_name']; // Directory temporario
	//verificar erros de upload
	if ($_FILES['arquivo']['error'] === 0) {
		//verificar tamanho do arquivo 1mb == 1 000 000 bytes
		if ($_FILES['arquivo']['size'] < 5000000) {
			//verificar se upload foi feito
			if (move_uploaded_file($tmp, $dir . $newName)) {
				header("Location: ../perfil.php?upload=success");
				echo "upload success";
			} else {
				echo "upload failed";
			}
		} else {
			echo "FIle size is not supported";
		}
	} else {
		echo "Houve erro ao fazer upload";
	}
}
