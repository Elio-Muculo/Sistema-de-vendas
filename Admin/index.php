<?php
include_once 'assets/includes/header.php';
 ?>


<div id="page-wrapper">
  <div id="page-inner">
      <div class="row">
          <div class="col-lg-12">
              <h2>ADMIN DASHBOARD</h2>
          </div>
      </div>
      <!-- /. ROW  -->
      <?php
          include_once '../php_action/connect.php';
        ?>
      <hr />
      <div class="row">
          <div class="col-lg-12 ">
              <div class="alert alert-info">
                  <strong>Welcome <?php echo $dados['nome']; ?>! </strong> You Have No pending Task For Today.
              </div>
          </div>
      </div>

      <form class="needs-validation" novalidate method="post" action="assets/php_action/produto_cadastrar.php">
          <div class="form-row">
              <div class="col-md-4 mb-3">
                  <label for="validationCustom01">Nome Produto</label>
                  <input type="text" class="form-control" id="validationCustom01" name="nome" placeholder="Nome" required>
              </div>
              <div class="col-md-4 mb-3">
                  <label for="validationCustom02">Preço</label>
                  <input type="text" class="form-control" id="validationCustom02" name="preco" placeholder="Preço" required>
              </div>
              <div class="col-md-4 mb-3">
                  <label for="validationCustomUsername">Descrição</label>
                  <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                      <input type="text" class="form-control" id="validationCustomUsername" name="desc" placeholder="Descrição" aria-describedby="inputGroupPrepend" required>
                  </div>
              </div>
          </div>
          <div class="form-row">
              <div class="col-md-6 mb-3">
                  <label for="validationCustom03">Data</label>
                  <input type="date" class="form-control" id="validationCustom03" name="data" placeholder="Date" required>
              </div>
              <div class="col-md-6 mb-3">
                  <label for="validationCustom04">Quantidade</label>
                  <input type="text" class="form-control" id="validationCustom04" name="qtd" placeholder="quantidade" required>
              </div>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">Confirmar Produto</label>
          </div>
          <button class="btn btn-primary" type="submit">Cadastrar</button>
      </form>

      <form action="assets/php_action/upload.php" method="post" enctype="multipart/form-data">
          <div class="custom-file mt-4">
              <?php
              $connect = mysqli_connect("localhost", "root", "", "moz_tech");
              $sql = "SELECT * FROM produtos ORDER BY id DESC LIMIT 1";
                  $result = mysqli_query($connect, $sql);
                  $dados = mysqli_fetch_array($result);
              ?>
                <input type="file" class="custom-file-input" name="upload" id="customFileLang">
                <label class="custom-file-label" for="customFileLang">Selecionar Arquivo</label>
              <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
          </div>
          <button class="btn btn-primary mt-2" type="submit">Upload</button>
      </form>

  </div>
  <!-- /. PAGE INNER  -->
</div>

<?php
include_once 'assets/includes/footer.php';
 ?>
