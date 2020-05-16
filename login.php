<?php
  session_start(); // deve ser a primeira linha


  if(isset($_POST)) {
    require_once 'conexao.php';
    $sql = "SELECT * FROM usuarios WHERE nomeUsuario = :nomeUsuario AND senha = :senha";
    $query = $con->prepare($sql);
    $query->bindParam('nomeUsuario', $_POST['nomeUsuario']);
    $senha = md5($_POST['senha']);
    $query->bindParam('senha', $senha);
    $query->execute();
    if ($query->rowCount()==1) {
      $usuario = $query->fetch();
      $_SESSION['logado'] = array("user"=>$usuario['nomeUsuario'], "id"=>$usuario['id']);
      header('Location: index.php');
    }else {
      $msg = "Usuário ou senha incorretos.";
    }
  }
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.png">

    <title>Vagas de emprego | Sulmaq part of Marel</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">
  </head>

  <body>
    <?php if(isset($msg)){ ?>
        <div class="alert alert-danger" role="alert">
          <?= $msg; ?>
        </div>
    <?php  } ?>
    <form action="login.php" method="post" class="form-signin">
      <div class="text-center mb-4">
        <img class="mb-4" src="logo.png" alt="" width="150" height="150">
        <h1 class="h3 mb-3" style="font-family: Helvetica, Arial, Sans-Serif; font-weight: 600; color: #394E70;">Vagas de Emprego</h1>
        <p style="font-family: Helvetica, Arial, Sans-Serif; font-weight: 500; color: #394E70;">Insira seu usuário e senha para acessar o sistema.</p>
      </div>

      <div class="form-label-group">
        <input name="nomeUsuario" type="text" id="inputUser" class="form-control" placeholder="Usuário" required autofocus>
        <label for="inputUser">Usuário</label>
      </div>

      <div class="form-label-group">
        <input name="senha" type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
        <label for="inputPassword">Senha</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar usuário
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-center" style="color: #394E70;">&copy; MontagnaD 2020</p>
    </form>
  </body>
</html>
