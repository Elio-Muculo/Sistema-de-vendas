<?php
if (isset($_POST)) {

  // start a session...
  session_start();

  // connect to databases...
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

  $id = clear($_POST['id']);
  $nome =  clear($_POST['nome']);
	$preco =  clear($_POST['price']);
	$data =  clear($_POST['data']);
	$quantidade =  clear($_POST['qtd']);


  $sql = "UPDATE produtos SET nome = '$nome', preco = '$preco', quantidade = quantidade + '$quantidade', data = '$data' WHERE id = '$id'";
  if (mysqli_query($connect, $sql)) {
    header("Location: ../../vendas.php?sucess");
    exit();
  }
}





?>
