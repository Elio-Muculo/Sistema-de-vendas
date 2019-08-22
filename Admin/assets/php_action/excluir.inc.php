<<<<<<< HEAD
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

  $sql = "UPDATE produtos SET status = 1 WHERE id = '$id'";
  if (mysqli_query($connect, $sql)) {
    header("Location: ../../vendas.php?sucess");
    exit();
  }
}
=======
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

  $sql = "UPDATE produtos SET status = 1 WHERE id = '$id'";
  if (mysqli_query($connect, $sql)) {
    header("Location: ../../vendas.php?sucess");
    exit();
  }
}
>>>>>>> 518b15a9e0b6d998b00b7aaf00404cfc073405b2
