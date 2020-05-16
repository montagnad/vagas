<?php

    require_once 'conexao.php';

    $id  = $_GET['id'];
    $sql = "SELECT * FROM usuarios WHERE id = " . $id;

    $query = $con->query($sql);
    $registro = $query->fetch();

    require ('cadastroUsuario.php');
 ?>
