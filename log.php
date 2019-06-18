<?php
//encerrando sessao
session_start();


//limpar sessao
session_unset();

//destroi sessao
session_destroy();

//redirecionar usuario
header('Location: login.php');
