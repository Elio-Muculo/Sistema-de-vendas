<?php
include_once 'includes/header.php';
?>
</head>


    <div class="jumbotron">
        <div class="container">
            <h1>Obrigado por comprar na Tech - Moz!
                Preencha os seus dados!</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card text-center shadow-md bg-light border-info">
                    <div class="card-heading pt-3">
                        <h2>Produto Escolhido</h2>
                    </div>
                    <div class="card-body">
                        <img src="img/tech<?=$_POST['id']?>.jpg" class="img-thumbnail img-responsive hidden-xs">
                        <div class="form-group">
                            <label for="qt">Nome do Produto</label>
                            <h4><?= $_POST['nome'] ?></h4>
                        </div>
                        <div class="form-group">
                            <label for="qt">Quantidade</label>
                            <input type="text" disabled id="qtd" value="<?= $_POST['tamanho'] ?>" class="form-control text-center">
                        </div>
                        <div class="form-group">
                            <label for="qt">Preço</label> <br>
                            <input type="text" disabled id="price" value="<?= $_POST['preco'] ?>" class="form-control text-center">
                        </div>
                        <div class="form-group">
                            <label for="total">Total</label>
                            <output for="qt valor" class="form-control">
                                <p id="total"></p>
                            </output>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <form class="col-sm-8 col-lg-9" action="php_action/payments.php" method="post">
                    <div class="row">
                        <fieldset class="col-md-6">
                            <legend>Dados pessoais</legend>
                            <div class="form-group">
                                <label for="nome">Nome Completo</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input type="text" class="form-control" id="nome" name="nome" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cpf">Endereço</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-book"></span></span>
                                    <input type="cpf" class="form-control" id="cpf" name="cpf" placeholder="Av. / postal box" data-mask="999.999.999-99">
                                </div>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="sim" name="spam" checked>
                                    Confirmar dados.
                                </label>
                            </div>
                        </fieldset>
                        <fieldset class="col-md-6">
                            <legend>Cartão de credito</legend>

                            <div class="form-group">
                                <label for="numero-cartao">Número - CVV</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-credit-card"></span></span>
                                    <input type="text" class="form-control" id="numero-cartao" name="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="bandeira-cartao">Bandeira</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-flag"></span></span>
                                    <select name="bandeira-cartao" id="bandeira-cartao" id="bandeira-cartao" class="form-control">
                                        <option value=""></option>
                                        <option value="master">MasterCard</option>
                                        <option value="visa">Visa</option>
                                        <option value="amex">M - pesa</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="validade-cartao">Validade</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                    <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                                </div>
                            </div>

                        </fieldset>
                    </div>
                    <button class="btn btn-primary btn-lg pull-right" type='button' data-toggle='modal' data-target='#exampleModal'>
                        <span class="glyphicon glyphicon-thumbs-up"></span>
                        Confirmar Pedido
                    </button>
                    <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Obrigado por comprar no Tech - Moz</h5>
                                <!-- Title modal -->
                              </div>
                              <div class="modal-body">
                                <!-- Body -->
                              </div>
                            </div>
                          </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="Bv4/js/jquery-3.4.1.min.js"></script>
<script src="Bv4/js/bootstrap.min.js"></script>
<script src="js/bilhetes.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
    $('html').load(function () {
      alert("OLA");
    });
  });
</script>
</html>
