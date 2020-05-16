<?php
  session_start();

  if (!isset($_SESSION['logado'])) {
    header('Location: login.php');
  }
 ?>

<?php require_once 'header.php';

require_once 'form_usuarios.php';

require_once 'footer.php' ?>
