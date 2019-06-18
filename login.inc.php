<?php
// connect to databases...
$servername = "localhost";
$username = "root";
$pass = "";
$db_name = "moz_tech";
$connect = mysqli_connect($servername, $username, $pass, $db_name);

// start a session...
session_start();

if (isset($_POST['btn'])) {

$login = mysqli_real_escape_string($connect, $_POST['nome']);
$pass = mysqli_real_escape_string($connect, $_POST['password']);

  if (empty($login) || empty($pass)) {
    // redirect to login if there has empty fields...
    header('Location: login.php?emptyfields');
    exit();
  } else {
    // code...
    $sql = "SELECT nome FROM usuarios WHERE nome = '$login'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
      $pass = md5($pass);
      $sql = "SELECT * FROM usuarios WHERE nome = '$login' AND senha = '$pass'";
      $result = mysqli_query($connect, $sql);

      if (mysqli_num_rows($result) == 1) {
        $dados = mysqli_fetch_array($result);
        $_SESSION['logado'] = true;
        $_SESSION['id_user'] = $dados['id'];
        header("Location: index.php?signin=sucess");
      }else {
        header("Location: login.php?signin=failed");
        exit();
      }
    }else {
      header("Location: cadastro.inc.php?create new account");
      exit();
    }
  }
}
