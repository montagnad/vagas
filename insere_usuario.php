<?php
  require_once ('conexao.php');

  $user = array(':nomeUsuario' => $_POST['nomeUsuario'],
                ':senha' => $_POST['senha'],
                  ':permissao' => $_POST['permissao']);

    if(isset($_GET['id'])){ //atualização dos dados
      $user['id'] = $_GET['id'];
      $sql = "UPDATE usuarios SET nomeUsuario = :nomeUsuario, senha = :senha, permissao = :permissao WHERE id = :id";
    }else{
      $sql = "INSERT INTO usuarios(nomeUsuario, senha, permissao) VALUES(:nomeUsuario, :senha, :permissao);";
    }

  $query = $con->prepare($sql);
  $resposta = $query->execute($user);

  if($resposta==true){
    header('Location: usuarios.php');
  } else{
    echo "Erro ao cadastrar" . print_r($query->errorInfo());
  }
 ?>
