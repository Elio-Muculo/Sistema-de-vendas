<<<<<<< HEAD
<?php
if (isset($_POST['btn'])) {

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

  $nome = clear($_POST['nome']);
  $pass = clear($_POST['password']);


  if (empty($nome) || empty($pass)) {
    header("Location: ../login.php?empty fields");
    exit();
  }else{
    $sql = "SELECT * FROM users WHERE nome = '$nome'";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) < 1) {
      header("Location: ../login.php?login=error");
      exit();
    }else{
      if ($dados = mysqli_fetch_array($result)) {
        $hashedPass = password_verify($pass, $dados['senha']);

        if ($hashedPass == false) {
          header("Location: ../login.php?login=error");
          exit();
        }elseif ($hashedPass == true) {
          if ($dados['status'] == 1) {
            $_SESSION['logado'] = true;
            $_SESSION['id_user'] = $dados['id'];
            $_SESSION['name_user'] = $dados['nome'];
            header("Location: ../Admin/index.php?login=sucess");
            exit();
          }else {
            $_SESSION['logado'] = true;
            $_SESSION['id_user'] = $dados['id'];
            $_SESSION['name_user'] = $dados['nome'];
            header("Location: ../index.php?login=sucess");
            exit();
          }
        }
      }
    }
  }
}else{
  header("Location: login.php");
  exit();
}
=======
<?php
if (isset($_POST['btn'])) {

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

  $nome = clear($_POST['nome']);
  $pass = clear($_POST['password']);


  if (empty($nome) || empty($pass)) {
    header("Location: ../login.php?empty fields");
    exit();
  }else{
    $sql = "SELECT * FROM users WHERE nome = '$nome'";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) < 1) {
      header("Location: ../login.php?login=error");
      exit();
    }else{
      if ($dados = mysqli_fetch_array($result)) {
        $hashedPass = password_verify($pass, $dados['senha']);

        if ($hashedPass == false) {
          header("Location: ../login.php?login=error");
          exit();
        }elseif ($hashedPass == true) {
          if ($dados['status'] == 1) {
            $_SESSION['logado'] = true;
            $_SESSION['id_user'] = $dados['id'];
            $_SESSION['name_user'] = $dados['nome'];
            header("Location: ../Admin/index.php?login=sucess");
            exit();
          }else {
            $_SESSION['logado'] = true;
            $_SESSION['id_user'] = $dados['id'];
            $_SESSION['name_user'] = $dados['nome'];
            header("Location: ../index.php?login=sucess");
            exit();
          }
        }
      }
    }
  }
}else{
  header("Location: login.php");
  exit();
}
>>>>>>> 518b15a9e0b6d998b00b7aaf00404cfc073405b2
