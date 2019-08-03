<?php
include_once 'assets/includes/header.php';
 ?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <h2>Definições Admin</h2>
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
                    <strong>Welcome <?php echo $dados['nome']; ?>! </strong> See you configurations.
                </div>
            </div>
        </div>

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active px-5" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Perfil administrador</a>
                <a class="nav-item nav-link px-5" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Gerir Administradores</a>
                <a class="nav-item nav-link px-5" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Backup produtos</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <form action="" method="post">
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
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Confirmar.</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="row">
                    <?php
                    $connect = mysqli_connect("localhost", "root", "", "moz_tech");
                    $sql = "SELECT * FROM users WHERE status = 1";
                    $result = mysqli_query($connect, $sql);

                    if (isset($_SESSION['id_user'])) {
                        if ($_SESSION['id_user'] == 1) {
                        echo " <button class='btn btn-primary mt-2 ml-4' type='button' data-toggle='modal' data-target='#exampleModal'>Adicionar</button>";
                        echo '<!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cadastrar novo administrador</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    
                                    <form action="assets/php_action/admin.inc.php" method="post">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Nome</label>
                                            <input type="text" class="form-control" name="nome" id="exampleInputPassword1" placeholder="Nome">
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Email</label>
                                            <input type="text" class="form-control" name="mail" id="exampleInputPassword1" placeholder="email">
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Senha</label>
                                            <input type="text" class="form-control" name="pwd" id="exampleInputPassword1" placeholder="Senha">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>';
                        }
                    }
                    ?>
                    <table class="table table-striped mt-4 px-4">
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nome</th>
                              <th scope="col">Senha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($admin = mysqli_fetch_array($result)) { ?>
                            <tr>
                              <th scope="row"> <?php echo $admin['id']; ?> </th>
                              <td><?php echo utf8_encode($admin['nome']); ?></td>
                              <td><?php echo $admin['senha']; ?></td>
                              <td><a data-toggle="modal" href="#editar<?php echo $dados['id'];?>">Editar</a></td>
                              <td> <a data-toggle="modal" href="#modal<?php echo $dados['id']; ?>">Excluir</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <?php
                    $connect = mysqli_connect("localhost", "root", "", "moz_tech");
                    $sql = "SELECT * FROM produtos WHERE status = 1";
                    $result = mysqli_query($connect, $sql); ?>
                  <table class="table table-striped mt-4 px-4">
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nome</th>
                              <th scope="col">Preço</th>
                              <th scope="col">Data</th>
                              <th scope="col">Quantidade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($dados = mysqli_fetch_array($result)) { ?>
                            <tr>
                              <th scope="row"> <?php echo $dados['id']; ?> </th>
                              <td><?php echo utf8_encode($dados['nome']); ?></td>
                              <td><?php echo $dados['preco']; ?></td>
                              <td><?php echo $dados['data']; ?></td>
                              <td><?php echo $dados['quantidade']; ?></td>
                            <td> <a data-toggle="modal" href="#modal<?php echo $dados['id']; ?>">Restaurar</a></td>

                                  <!-- Modal estrutura Ecluir -->
                            <!-- Modal -->
                            <div class="modal fade" id="modal<?php echo $dados['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Recuperar o produto <?php echo utf8_encode($dados['nome']); ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                     <p>Tem certeza que deseja recuperar esse produto?</p>
                                  </div>
                                  <div class="modal-footer">
                                    <form action="assets/php_action/excluir.inc.php" method="POST">
                                          <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                          <button type="submit" class="btn btn-primary">Sim</button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>

<?php
include_once 'assets/includes/footer.php';
 ?>
