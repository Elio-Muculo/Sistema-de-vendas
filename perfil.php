<?php
include_once 'includes/header.php';

// conexao
$servername = "localhost";
$username = "root";
$pass = "";
$db_name = "moz_tech";
$connect = mysqli_connect($servername, $username, $pass, $db_name);

$id = $_SESSION['id_user'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$user = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($user);

?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Olá, <?php echo $dados['nome']; ?></h1>
    <p class="lead">Atualize informações do seu perfil</p>
  </div>
</div>
<div class="container mt-4 pt-1">
  <div class="row flex-nowrap mt-2">
    <div class="col-md-3 shadow rounded">
      <div class="card mt-3  bg-dark">
        <?php
$file = "uploads/tech$id.jpg";
if (file_exists($file)) {
	echo "<img class='card-img-top' src='uploads/tech$id.jpg' alt='default profile' style='min-height: 250px;'>"
	;
} else {
	echo "<img class='card-img-top' src='uploads/Folder.jpg' alt='default profile' style='min-height: 250px;'>";
}
?>
        <div class="card-body">
          <form class="" action="php_action/perfil.inc.php" method="post" enctype="multipart/form-data">
            <input type="file" name="arquivo" id="upload" style="display: none;">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <label for="upload">
              <span class="bg-primary p-2 position-absolute" style="cursor: pointer; bottom: 110px; left: 200px; border-radius: 100px;"> <i class="fa fa-bars text-white"></i> </span>
            </label>
            <button type="submit" class="btn btn-primary ml-0" name="button">Alterar foto</button>
          </form>
          <p class="text-white mt-2 ml-1" id="bio">Sem biografia!</p>
        </div>
      </div>

      <div class="input-group mt-3">
        <input type="text" class="form-control perfil" placeholder="user bio" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-primary btn-sub" type="button" id="button-addon2">Enviar</button>
        </div>
      </div>
      <small id="passwordHelpBlock" class="form-text text-muted mb-4">write a short bio!</small>

    </div>
    <div class="col-md-9 shadow rounded ml-3">
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
    </div>
  </div>
</div>

<script src="Bv4/js/jquery-3.4.1.min.js"></script>
<script src="Bv4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/perfil.js"></script>
