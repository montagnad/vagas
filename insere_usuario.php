<?php
  require_once ('conexao.php');

  $vaga = array(':vaga' => $_POST['vaga'],
                ':setor' => $_POST['setor'],
                  ':requisitos' => $_POST['requisitos']);

    if(isset($_GET['id'])){ //atualização dos dados
      $vaga['id'] = $_GET['id'];
      $sql = "UPDATE vagas SET nomeVaga = :vaga, nomeSetor = :setor, requisitos = :requisitos WHERE id = :id";
    }else{
      $sql = "INSERT INTO vagas(nomeVaga, nomeSetor, requisitos) VALUES(:vaga, :setor, :requisitos);";
    }

  $query = $con->prepare($sql);
  $resposta = $query->execute($vaga);

  if($resposta==true){
    header('Location: index.php');
  } else{
    echo "Erro ao cadastrar" . print_r($query->errorInfo());
  }
 ?>
