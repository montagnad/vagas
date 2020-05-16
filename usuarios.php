<?php
  session_start();

  if (!isset($_SESSION['logado'])) {
    header('Location: login.php');
  }
 ?>

<?php require_once 'header.php';

require_once 'lista_usuarios.php'; //abre o lista_usuarios

require_once 'footer.php'  ?>
