<?php
include_once 'assets/includes/header.php';
 ?>

<?php
$connect = mysqli_connect("localhost", "root", "", "moz_tech");
$sql = "SELECT * FROM produtos WHERE status = 0";
$result = mysqli_query($connect, $sql);

 ?>

 <div id="page-wrapper">
   <div id="page-inner">
       <div class="row">
           <div class="col-lg-12">
               <h2>Vendas Admin</h2>
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
       <div class="row">
         <?php
         $connect = mysqli_connect("localhost", "root", "", "moz_tech");
         $sqlVendas = "SELECT * FROM produtos ORDER BY vendas DESC LIMIT 1";
         $resultVendas = mysqli_query($connect, $sqlVendas);
         $venda = mysqli_fetch_array($resultVendas);
         ?>
         <div class="col-md-4">
           <div class="card text-white bg-dark mb-3" style="max-width: 18rem; height: 250px;">
              <div class="card-header">Produto Mais Vendido</div>
                <div class="card-body">
                  <h5 class="card-title"><?php echo  utf8_encode($venda['nome']);?></h5>
                  <p class="card-text"><?php echo  "Total de vendas: ".utf8_encode($venda['vendas']);?></p>
                  <p class="card-text"><?php echo  "Valor: ". $venda['preco'];?></p>
                </div>
            </div>
          </div>
          <?php
          $sqlVendas = "SELECT * FROM produtos ORDER BY vendas ASC LIMIT 1";
          $resultVendas = mysqli_query($connect, $sqlVendas);
          $venda = mysqli_fetch_array($resultVendas);
          ?>
          <div class="col-md-4">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem; height: 250px;">
               <div class="card-header">Produto Menos Vendido</div>
                 <div class="card-body">
                   <h5 class="card-title"><h5 class="card-title"><?php echo  utf8_encode($venda['nome']);?></h5>
                   <p class="card-text"><?php echo  "Total de vendas: ".utf8_encode($venda['vendas']);?></p>
                   <p class="card-text"><?php echo  "Valor: ". $venda['preco'];?></p>
                 </div>
               </div>
          </div>

          <div class="col-md-4">
             <div class="card text-white bg-warning mb-3" style="max-width: 18rem; height: 250px;">
                <div class="card-header">Title</div>
                  <div class="card-body">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
              </div>
         </div>
       </div>
       <table class="table table-striped mt-4">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Preço</th>
              <th scope="col">Data</th>
              <th scope="col">Quantidade</th>
              <th scope="col">Opções</th>
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
              <td><a data-toggle="modal" href="#editar<?php echo $dados['id'];?>">Editar</a></td>
              <td> <a data-toggle="modal" href="#modal<?php echo $dados['id']; ?>">Excluir</a></td>



              <!-- Modal estrutura Editar -->
              <!-- Modal -->
              <div class="modal fade" id="editar<?php echo $dados['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Editar o produto <?php echo utf8_encode($dados['nome']); ?> </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="assets/php_action/editar.inc.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" class="form-control" name="nome" value="<?php echo utf8_encode($dados['nome']);?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Preço</label>
                            <input type="text" class="form-control" name="price" value="<?php echo $dados['preco'];?>"  id="exampleInputPassword1" placeholder="Preço">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Data</label>
                            <input type="date" class="form-control" name="data" value="<?php echo $dados['data'];?>"  id="exampleInputPassword1">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Quantidade</label>
                            <input type="number" class="form-control"  name="qtd" value="<?php echo $dados['quantidade'];?>"  id="exampleInputPassword1" placeholder="Quantidade">
                          </div>
                          <button type="submit" class="btn btn-primary">Atualizar</button>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                  </div>
                </div>
              </div>


            <!-- Modal estrutura Ecluir -->
            <!-- Modal -->
            <div class="modal fade" id="modal<?php echo $dados['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Excluir o produto <?php echo utf8_encode($dados['nome']); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                     <p>Tem certeza que deseja excluir esse produto?</p>
                  </div>
                  <div class="modal-footer">
                    <form action="assets/php_action/excluir.inc.php" method="POST">
                          <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          <button type="submit" class="btn btn-primary">Excluir</button>
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

   <!-- /. PAGE INNER  -->
 </div>

<?php
include_once 'assets/includes/footer.php';
 ?>
