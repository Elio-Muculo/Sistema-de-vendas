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
