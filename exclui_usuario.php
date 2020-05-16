<?php

    require_once 'conexao.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM usuarios WHERE id = " . $id;

    $resultado = $con->query($sql);
    if($resultado==true){
      //echo "Registro removido com sucesso";
      header('Location: usuarios.php');
    }else{
      echo "Erro ao tentar remover o registro: " . $id;
    }
 ?>
