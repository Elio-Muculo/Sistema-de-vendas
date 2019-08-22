<<<<<<< HEAD
<?php
// conexao
$servername = "localhost";
$username = "root";
$pass = "";
$db_name = "moz_tech";
$connect = mysqli_connect($servername, $username, $pass, $db_name);

//sessao
session_start();


// verificar sessao
if (!isset($_SESSION['logado'])) {
    header('Location: ../login.php?signup');
    exit();
}

//
if (isset($_SESSION['logado'])) {
    //dados
    $id = $_SESSION['id_user'];
    $sql = "SELECT * FROM users WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
}

 ?>
=======
<?php
// conexao
$servername = "localhost";
$username = "root";
$pass = "";
$db_name = "moz_tech";
$connect = mysqli_connect($servername, $username, $pass, $db_name);

//sessao
session_start();


// verificar sessao
if (!isset($_SESSION['logado'])) {
    header('Location: ../login.php?signup');
    exit();
}

//
if (isset($_SESSION['logado'])) {
    //dados
    $id = $_SESSION['id_user'];
    $sql = "SELECT * FROM users WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
}

 ?>
>>>>>>> 518b15a9e0b6d998b00b7aaf00404cfc073405b2
