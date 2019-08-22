<<<<<<< HEAD
<?php

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

  $id = clear($_GET['id']);

  $sql = "SELECT * FROM produtos WHERE id = '$id'";
  $result = mysqli_query($connect, $sql);
  $produto = mysqli_fetch_array($result);
=======
<?php

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

  $id = clear($_GET['id']);

  $sql = "SELECT * FROM produtos WHERE id = '$id'";
  $result = mysqli_query($connect, $sql);
  $produto = mysqli_fetch_array($result);
>>>>>>> 518b15a9e0b6d998b00b7aaf00404cfc073405b2
